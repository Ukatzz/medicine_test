<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogCategory3 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_category', function($table)
        {
            $table->string('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_category', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
