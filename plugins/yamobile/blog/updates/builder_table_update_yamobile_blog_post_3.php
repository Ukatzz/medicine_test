<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogPost3 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->text('h1')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->dropColumn('h1');
        });
    }
}
