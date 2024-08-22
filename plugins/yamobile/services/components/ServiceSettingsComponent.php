<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\ServiceSettings;

class ServiceSettingsComponent extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.service_settings.name',
            'description' => 'yamobile.services::lang.components.service_settings.description'
        ];
    }

    public function onRun()
    {
        $this->settings = $this->getServicesSettings();
    }

    private function getServicesSettings()
    {
        return [
            'image' => ServiceSettings::get('image'),
            'description' => ServiceSettings::get('description'),
            'h1' => ServiceSettings::get('h1'),
            'meta_title' => ServiceSettings::get('meta_title'),
            'meta_keywords' => ServiceSettings::get('meta_keywords'),
            'meta_description' => ServiceSettings::get('meta_description'),
        ];
    }
}