<?php

namespace Yamobile\Blog\Models;

use October\Rain\Database\Model;

class BlogSettings extends Model
{
    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_blog_blog_settings';

    public $settingsFields = 'fields.yaml';
}