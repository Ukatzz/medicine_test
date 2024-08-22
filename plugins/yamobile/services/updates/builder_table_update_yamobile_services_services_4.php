<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices4 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->smallInteger('text_block3')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->smallInteger('text_block3')->nullable()->change();
        });
    }
}
