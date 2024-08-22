<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddUrlToYamobileServicesServices extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->string('url')->unique();
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->dropColumn(['url']);
        });
    }
}