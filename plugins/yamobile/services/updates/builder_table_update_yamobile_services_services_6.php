<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices6 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->text('text_service_name');
            $table->text('text_service_price');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->dropColumn('text_service_name');
            $table->dropColumn('text_service_price');
        });
    }
}
