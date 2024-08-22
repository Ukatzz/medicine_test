<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddPreviewImageToServices extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->string('preview_image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->dropColumn(['preview_image']);
        });
    }
}
