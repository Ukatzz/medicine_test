<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddEnabledToYamobileServicesCategory extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_categories', function ($table) {
            $table->boolean('is_enabled')->default(1);
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_categories', function ($table) {
            $table->dropColumn(['is_enabled']);
        });
    }
}
