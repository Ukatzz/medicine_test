<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogTags extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_tags', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_tags', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
