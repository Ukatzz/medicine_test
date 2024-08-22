<?php namespace Yamobile\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileReviewsList12 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
