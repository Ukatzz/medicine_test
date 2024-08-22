<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices5 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->string('text_block_three');
            $table->dropColumn('text_block3');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->dropColumn('text_block_three');
            $table->smallInteger('text_block3');
        });
    }
}
