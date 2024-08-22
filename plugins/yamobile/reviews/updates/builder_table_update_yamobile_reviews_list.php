<?php namespace Yamobile\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileReviewsList extends Migration
{
    public function up()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->string('from', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->dropColumn('from');
        });
    }
}
