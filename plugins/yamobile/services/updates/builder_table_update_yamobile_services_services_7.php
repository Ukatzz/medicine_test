<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices7 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->text('text_block_3');
            $table->dropColumn('text_block_three');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->dropColumn('text_block_3');
            $table->string('text_block_three', 255);
        });
    }
}
