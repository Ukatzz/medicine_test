<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddReorderToYamobileServicesCategory extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_categories', function ($table) {
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_categories', function ($table) {
            $table->dropColumn(['sort_order']);
        });
    }
}