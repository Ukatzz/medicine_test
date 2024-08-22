<?php

namespace Yamobile\Services\Models;

use Model;


class Price extends Model
{

    use \October\Rain\Database\Traits\Sortable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_services_prices';
    
    

    public $belongsToMany = [
        'categories' => [
            \Yamobile\Services\Models\Category::class,
            'table' => 'yamobile_price_to_categories',
            'order' => 'name',
            'conditions' => 'is_enabled = true'
        ]
    
    ];

}
