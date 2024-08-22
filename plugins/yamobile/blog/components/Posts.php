<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Post;
use Yamobile\Blog\Models\Category;

class Posts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Посты блога',
            'description' => 'Показывает список постов блога.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Параметр URL категории',
                'description' => 'Параметр URL категории, необходимый для выбора записей.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function posts()
    {
        $slug = $this->property('slug');
        $posts;

        if ($slug) {
            $posts = Category::get()->firstWhere('slug', $slug)->posts()->get();
            return $posts;
        }

        return Post::get();
    }
}
