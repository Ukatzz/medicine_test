<?php

namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\BlogSettings;

class BlogSettingsComponent extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'BlogSettings',
            'description' => 'fds'
        ];
    }

    public function onRun()
    {
        $this->settings = $this->getSettings();
    }

    public function getSettings()
    {
        return [
            'image' => BlogSettings::get('image'),
            'description' => BlogSettings::get('description'),
            'h1' => BlogSettings::get('h1'),
            'meta_title' => BlogSettings::get('meta_title'),
            'meta_description' => BlogSettings::get('meta_description'),
            'meta_keywords' => BlogSettings::get('meta_keywords'),
        ];
    }
}