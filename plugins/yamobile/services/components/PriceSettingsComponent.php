<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\PriceSettings;

class PriceSettingsComponent extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.price_settings.name',
            'description' => 'yamobile.services::lang.components.price_settings.description'
        ];
    }

    public function onRun()
    {
        $this->settings = $this->getPricesSettings();
    }

    private function getPricesSettings()
    {
        return [
            'image' => PriceSettings::get('image'),
            'description' => PriceSettings::get('description'),
            'heading' => PriceSettings::get('heading'),
            'meta_title' => PriceSettings::get('meta_title'),
            'meta_keywords' => PriceSettings::get('meta_keywords'),
            'meta_description' => PriceSettings::get('meta_description'),
        ];
    }
}
