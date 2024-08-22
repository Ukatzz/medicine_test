<?php

namespace Yamobile\Services\Components;


use Response;
use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Category;



class CategoryComponent extends ComponentBase
{

    public $category;
    public $breadcrumbs;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.category.name',
            'description' => 'yamobile.services::lang.components.category.description',
        ];
    }


    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'yamobile.services::lang.components.category.properties.slug.title',
                'description' => 'yamobile.services::lang.components.category.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }


    public function onRun()
    {

        $this->category = $this->loadCategory();

        if(!$this->category){
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

        $this->breadcrumbs = $this->generateBreadcrumbs();


    }


    private function loadCategory()
    {
        $slug = $this->property('slug');

        $category = Category::where('slug',$slug)
            ->where('is_enabled', true)
            ->first();

        return $category;
    }

    private function generateBreadcrumbs(): array
    {

        $arBreadcrumbs = array();

        $category = $this->loadCategory();

        $arBreadcrumbs[] = [
            'name' => $category->name,
            'link' => false
        ];

        return $arBreadcrumbs;

    }

}