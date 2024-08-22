<?php namespace Yamobile\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileReviewsList4 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->text('fromwhere')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_reviews_list', function($table)
        {
            $table->string('fromwhere', 255)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
