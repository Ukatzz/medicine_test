<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;



class ServicesComponent extends ComponentBase
{

    public $services;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.services.name',
            'description' => 'yamobile.services::lang.components.services.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.services.properties.items.title',
                'description' => 'yamobile.services::lang.components.services.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    public function onRun()
    {

        $this->services = $this->loadServices();

    }

    private function loadServices()
    {

        $items = $this->property('items');
        $services = Service::where('is_enabled', true);


        if($items){
            return $services->paginate($items);
        }

        return $services->get();

    }

}