<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->string('img_block');
            $table->text('text_block');
            $table->smallInteger('tixt_inside_block');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->dropColumn('img_block');
            $table->dropColumn('text_block');
            $table->dropColumn('tixt_inside_block');
        });
    }
}
