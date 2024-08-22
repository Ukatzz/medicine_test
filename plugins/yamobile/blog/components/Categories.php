<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Post;
use Yamobile\Blog\Models\Category;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Категории блога',
            'description' => 'Показывает список категорий блога.'
        ];
    }

    public function Categories()
    {
        return Category::get();
    }
}
