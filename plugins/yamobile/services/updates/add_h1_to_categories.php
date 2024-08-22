<?php

namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddH1ToCategories extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_categories', function ($table) {
            $table->string('h1')->nullable();
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_categories', function ($table) {
            $table->dropColumn(['h1']);
        });
    }
}
