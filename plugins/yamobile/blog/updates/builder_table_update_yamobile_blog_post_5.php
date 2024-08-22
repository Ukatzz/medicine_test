<?php namespace Yamobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileBlogPost5 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->dateTime('datetime')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_blog_post', function($table)
        {
            $table->dropColumn('datetime');
        });
    }
}
