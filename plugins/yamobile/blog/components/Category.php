<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Category as BlogCategory;

class Category extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Категория блога',
            'description' => 'Показывает категорию блога.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Параметр URL',
                'description' => 'Параметр URL, необходимый для выбора конкретной категории.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function category()
    {
        $slug = $this->property('slug');
        
        return BlogCategory::where('slug', $slug)->first();
    }
}
