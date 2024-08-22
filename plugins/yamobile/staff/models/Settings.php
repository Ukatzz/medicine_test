<?php

namespace Yamobile\Staff\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_staff_settings';

    public $settingsFields = 'fields.yaml';
}
