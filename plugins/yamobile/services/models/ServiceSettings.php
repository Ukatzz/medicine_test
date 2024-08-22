<?php

namespace Yamobile\Services\Models;

use October\Rain\Database\Model;


class ServiceSettings extends Model
{

    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_services_service_settings';

    public $settingsFields = 'fields.yaml';
}
