<?php

namespace Yamobile\LeadTracker\Components;

use Cms\Classes\ComponentBase;
use Yamobile\LeadTracker\Models\Lead;
use hisorange\BrowserDetect\Parser as Browser;
use Yamobile\LeadTracker\Models\Settings;
use Mail;
use Log;

class Tracker extends ComponentBase
{
    const INFO_FIELDS_KEY = 'info:';

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.leadtracker::lang.components.tracker.name',
            'description' => 'yamobile.leadtracker::lang.components.tracker.description',
        ];
    }





public function onSubmitLeadForm()
{
        // Получаем токен reCAPTCHA из POST данных
        $recaptchaToken = post("grecaptcha");
        
    
        // Ваш секретный ключ reCAPTCHA
        $recaptchaSecret = '6Le0uSsqAAAAAPb7sJ1wdOT8z6AVDiepRJ1ZdclS';
    
        // Формируем URL для проверки reCAPTCHA
        $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptchaSecret . '&response=' . $recaptchaToken;
    
        // Выполняем запрос и получаем ответ
        $recaptchaResponse = file_get_contents($recaptchaURL);
        
    
        if ($recaptchaResponse === FALSE) {
        // Обрабатываем ошибку запроса
            throw new \Exception('Не удалось проверить reCAPTCHA.');
        }
    
        // Декодируем ответ
        $recaptchaResponseKeys = json_decode($recaptchaResponse, true);
    
        if (!$recaptchaResponseKeys['success'] && $recaptchaResponseKeys['score'] < 0.5) {
            // Проверка не пройдена
            throw new \ValidationException(['grecaptcha'=> 'Проверка reCAPTCHA не пройдена.']);
        }
        
          /*$recaptchaToken = post("grecaptcha");
           Log::info('reCAPTCHA Token: ' . $recaptchaToken);
         $this->addJs ('https://www.google.com/recaptcha/api.js?render=6Le0uSsqAAAAAGrBrufXHUEdgE9ZuDkb9mSmdQgQ');
         $this->addJs('assets/js/submittoken.js');
         $recaptchaSecret = '6LcafxoqAAAAAN5nVoefW2GzH5_FE3NGHJ4vDEho';
         $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptchaSecret . '&response=' . $recaptchaToken;
    
          $recaptchaResponse = file_get_contents($recaptchaURL);
          echo 'recaptchaURL: ' . $recaptchaResponse . '\n';
          $recaptchaResponseKeys = json_decode($recaptchaResponse, true);
         
    */
        
        
        $lead = new Lead;

        if (array_key_exists('name', $_POST)) {
        $lead->name = $_POST['name'];
        }
        if (array_key_exists('phone', $_POST)) {
        $lead->phone = $_POST['phone'];
        }
        if (array_key_exists('email', $_POST)) {
        $lead->email = $_POST['email'];
        }

        if(isset($_SERVER['HTTP_USER_AGENT'])){

        $lead->user_agent = Browser::userAgent();

        if(Browser::deviceType() !== null){
        $lead->device_type = Browser::deviceType();
        }

        if(Browser::browserName() !== null){
        $lead->browser_name = Browser::browserName();
        }

        if(Browser::deviceType() !== null){
        $lead->platform_name = Browser::platformName();
        }
        }

        $userIp = self::getUserIp();
        if ($userIp) {
        $lead->ip = $userIp;
        }

        $infoFields = self::getInfoFileds();
        if ($infoFields) {
        $lead->info = $infoFields;
        }

        if(!empty($_GET['utm_source'])) {
        $lead->utm_source = htmlspecialchars($_GET['utm_source'], ENT_QUOTES, 'UTF-8');
        }

        if(!empty($_GET['utm_medium'])) {
        $lead->utm_medium = htmlspecialchars($_GET['utm_medium'], ENT_QUOTES, 'UTF-8');
        }

        if(!empty($_GET['utm_campaign'])) {
        $lead->utm_campaign = htmlspecialchars($_GET['utm_campaign'], ENT_QUOTES, 'UTF-8');
        }

        if(!empty($_GET['utm_term'])) {
        $lead->utm_term = htmlspecialchars($_GET['utm_term'], ENT_QUOTES, 'UTF-8');
        }

        if(!empty($_GET['utm_content'])) {
        $lead->utm_content = htmlspecialchars($_GET['utm_content'], ENT_QUOTES, 'UTF-8');
        }

        $lead->source = self::getURL();
        if ($lead->save()) {
        self::sendNotifications($lead);
        }


    }

    static private function getUserIp()
    {

        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = @$_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    static private function getInfoFileds()
    {
        $infoFields = array();

        $postArrayKeys = array_keys($_POST);
        $infoArrayKeys = array_filter($postArrayKeys, function ($key) {
            $substring = substr($key, 0, 5);
            if ($substring === self::INFO_FIELDS_KEY) {
                return $key;
            }
        });
        foreach ($infoArrayKeys as $key) {
            $infoFields = array_merge($infoFields, array($key => $_POST[$key]));
        }

        if ($infoFields) {
            return json_encode($infoFields);
        }
        return null;
    }

    static private function getURL()
    {
        $url = "";

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $url .= "https://";
        } else {
            $url .= "http://";
        }
        $url .= $_SERVER['HTTP_HOST'];
        $url .= $_SERVER['REQUEST_URI'];

        return $url;
    }

    private static function sendNotifications($lead)
    {
        $settingsEmails = Settings::get('emails');

        $notificationLead = [
            'name' => $lead->name,
            'phone' => $lead->phone,
            'email' => $lead->email,
            'info' => json_decode($lead->info,true),
            'source' => $lead->source,
            'ip' => $lead->ip,
            'device_type' => $lead->device_type,
            'browser_name' => $lead->browser_name,
            'platform_name' => $lead->platform_name,
            'utm_source' => $lead->utm_source,
            'utm_medium' => $lead->utm_medium,
            'utm_campaign' => $lead->utm_campaign,
            'utm_term' => $lead->utm_term,
            'utm_content' => $lead->utm_content,
        ];
        
        Mail::sendTo($settingsEmails, 'yamobile.leadtracker::mail.lead', $notificationLead); 
    }
}