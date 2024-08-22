<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYamobileBlogPostsTags extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_posts_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->smallInteger('tag_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_posts_tags');
    }
}
