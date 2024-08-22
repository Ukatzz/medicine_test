<?php namespace Yamobile\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileReviewsList11 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->text('maing')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->text('maing')->nullable(false)->change();
        });
    }
}
