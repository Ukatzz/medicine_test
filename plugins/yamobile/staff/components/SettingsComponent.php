<?php

namespace Yamobile\Staff\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Staff\Models\Settings;

class SettingsComponent extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.staff::lang.components.settings.name',
            'description' => 'yamobile.staff::lang.components.settings.description',
        ];
    }

    public function onRun()
    {
        $this->settings = $this->loadSettings();
    }

    public function loadSettings()
    {
        return [
            'heading' => Settings::get('heading'),
            'image' => Settings::get('image'),
            'description' => Settings::get('description'),
            'meta_title' => Settings::get('meta_title'),
            'meta_keywords' => Settings::get('meta_keywords'),
            'meta_description' => Settings::get('meta_description'),
        ];
    }
}
