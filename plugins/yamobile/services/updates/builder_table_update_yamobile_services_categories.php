<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesCategories extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_categories', function($table)
        {
            $table->boolean('switch_category');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_categories', function($table)
        {
            $table->dropColumn('switch_category');
        });
    }
}
