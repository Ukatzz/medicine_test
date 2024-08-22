<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Category;



class CategoriesComponent extends ComponentBase
{

    public $categories;


    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.categories.name',
            'description' => 'yamobile.services::lang.components.categories.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.categories.properties.items.title',
                'description' => 'yamobile.services::lang.components.categories.properties.items.description',
                'default'     => '6',
            ],
        ];
    }


    public function onRun()
    {

        $this->categories = $this->loadCategories();

    }


    private function loadCategories()
    {

        $items = $this->property('items');

        $categories = Category::where('is_enabled', true);

        if($items){
            return $categories->paginate($items);
        }

        return $categories->get();

    }

}