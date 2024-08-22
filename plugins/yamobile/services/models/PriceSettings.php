<?php

namespace Yamobile\Services\Models;

use October\Rain\Database\Model;

class PriceSettings extends Model
{

    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_services_price_settings';

    public $settingsFields = 'fields.yaml';
}
