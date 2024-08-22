<?php namespace Yamobile\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileReviewsList2 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->string('fromwhere');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->dropColumn('fromwhere');
        });
    }
}
