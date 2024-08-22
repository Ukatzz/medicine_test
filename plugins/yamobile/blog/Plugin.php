<?php namespace Yamobile\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Yamobile\Blog\Components\Posts::class => 'Posts',
            \Yamobile\Blog\Components\Categories::class => 'BlogCategories',
            \Yamobile\Blog\Components\Post::class => 'Post',
            \Yamobile\Blog\Components\Tags::class => 'Tags',
            \Yamobile\Blog\Components\Category::class => 'Category',
            \Yamobile\Blog\Components\BlogSettingsComponent::class => 'BlogSettings',
        ];
    }

    public function registerSettings()
    {
        return [
            'blog' => [
                'label' => 'Главная страница блога',
                'description' => 'Настройки главной страницы блога',
                'category' => 'Содержание',
                'icon' => 'oc-icon-newspaper-o',
                'class' => \Yamobile\Blog\Models\BlogSettings::class,
                'order' => 500,
                'keywords' => 'блог'
            ]
        ];
    }
}
