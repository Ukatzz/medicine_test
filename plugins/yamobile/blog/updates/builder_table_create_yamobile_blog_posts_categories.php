<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYamobileBlogPostsCategories extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_posts_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['post_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_posts_categories');
    }
}
