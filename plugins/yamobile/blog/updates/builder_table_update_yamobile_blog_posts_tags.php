<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogPostsTags extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_posts_tags', function($table)
        {
            $table->integer('tag_id')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_posts_tags', function($table)
        {
            $table->smallInteger('tag_id')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
