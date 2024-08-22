<?php

namespace Yamobile\Staff\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Staff\Models\Category;

class CategoriesComponent extends ComponentBase
{
    public $categories;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.staff::lang.components.categories.name',
            'description' => 'yamobile.staff::lang.components.categories.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'categoriesPerPage' => [
                'title' => 'yamobile.staff::lang.components.categories.properties.categoriesPerPage.title',
                'description' => 'yamobile.staff::lang.components.categories.properties.categoriesPerPage.description',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'default' => '20',
            ],
        ];
    }

    public function onRun()
    {
        $this->categories = $this->loadCategories();
    }

    private function loadCategories()
    {
        $categoriesPerPage = $this->property('categoriesPerPage');

        if ($categoriesPerPage) {
            return Category::paginate($categoriesPerPage);
        }
        return Category::all();
    }
}
