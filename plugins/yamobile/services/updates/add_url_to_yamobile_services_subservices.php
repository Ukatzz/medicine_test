<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddUrlToYamobileServicesSubservices extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_subservice', function ($table) {
            $table->string('url')->unique();
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_subservice', function ($table) {
            $table->dropColumn(['url']);
        });
    }
}