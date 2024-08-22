<?php namespace Yamobile\Blog\Models;

use Model;
use Yamobile\Blog\Models\Post;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_blog_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'status' => 'required',
        'slug' => 'required',
        'name' => 'required'
    ];

    /*
     * Relations
     */
    public $belongsToMany = [
        'posts' => [
            Post::class,
            'table' => 'yamobile_blog_posts_categories',
            'order' => 'name'
        ]
    ];

    public $hasMany = [
        'main_posts' => Post::class
    ];
}
