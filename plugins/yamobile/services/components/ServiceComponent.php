<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;
use Yamobile\Services\Models\Category;

class ServiceComponent extends ComponentBase
{

    public $service;
    public $breadcrumbs;


    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.service.name',
            'description' => 'yamobile.services::lang.components.service.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'category_slug' => [
                'title' => 'yamobile.services::lang.components.service.properties.category.title',
                'description' => 'yamobile.services::lang.components.service.properties.category.description',
                'default' => '{{ :category_slug }}',
                'type' => 'string'
            ],
            'slug' => [
                'title'       => 'yamobile.categories::lang.components.service.properties.slug.title',
                'description' => 'yamobile.categories::lang.components.service.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function onRun()
    {

        $this->service = $this->loadService();

        if(!$this->service || ($this->service->category['slug'] !== $this->property('category_slug'))) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

        $this->breadcrumbs = $this->generateBreadcrumbs();
    }


    private function loadService()
    {

        $service = Service::where('slug', $this->property('slug'))
            ->where('is_enabled', true)
            ->first();

        return $service;
    }

    private function generateBreadcrumbs(): array
    {

        $arBreadcrumbs = array();

        $service = $this->loadService();

        $category = $service->category;

        $arBreadcrumbs[] = [
            'name' => $category->name,
            'link' => $category->slug
        ];

        $arBreadcrumbs[] = [
            'name' => $service->name,
            'link' => false
        ];

        return $arBreadcrumbs;

    }

}