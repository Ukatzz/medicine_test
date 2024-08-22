<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogCategory extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_category', function($table)
        {
            $table->string('title', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_category', function($table)
        {
            $table->string('title', 191)->nullable(false)->change();
        });
    }
}
