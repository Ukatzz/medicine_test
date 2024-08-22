<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogPost extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->text('description')->nullable(false)->change();
        });
    }
}
