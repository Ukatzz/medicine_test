<?php

namespace Yamobile\Services\Models;

use Model;
use Yamobile\Services\Models\Service;

class Category extends Model
{

    use \October\Rain\Database\Traits\Sortable;

    public $table = 'yamobile_services_categories';

    public $hasMany = [
        'services' => [
            Service::class,
            'order' => 'name',
            'conditions' => 'is_enabled = true'
        ]
    ];

    public $belongsToMany = [
        'prices' => [
                \Yamobile\Services\Models\Price::class,
                'table' => 'yamobile_price_to_categories',
                'order' => 'name',
                'conditions' => 'is_enabled = true'
            ]
    ];

}