<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogPost2 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->text('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
