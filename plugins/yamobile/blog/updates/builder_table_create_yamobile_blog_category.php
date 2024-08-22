<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYamobileBlogCategory extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('meta_title');
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_category');
    }
}
