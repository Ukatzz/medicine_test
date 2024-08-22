<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYamobileBlogPost extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
            $table->boolean('status');
            $table->text('image')->nullable();
            $table->text('description');
            $table->text('content');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_post');
    }
}
