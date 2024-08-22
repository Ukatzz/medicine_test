<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddDescriptionToServices extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->dropColumn(['description']);
        });
    }
}
