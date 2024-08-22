<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Tag;

class Tags extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Теги блога',
            'description' => 'Показывает список тегов блога.'
        ];
    }

    public function tags()
    {
        return Tag::get();
    }
}
