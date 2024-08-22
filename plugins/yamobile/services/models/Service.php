<?php


namespace Yamobile\Services\Models;

use Model;
use Yamobile\Services\Models\Category;


class Service extends Model
{

    use \October\Rain\Database\Traits\Sortable;

    public $table = 'yamobile_services_services';


    public $belongsTo = [
        'category' => Category::class,
    ];
    
    
}
