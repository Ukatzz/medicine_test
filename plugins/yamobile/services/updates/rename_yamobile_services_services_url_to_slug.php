<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameYamobileServicesServicesUrlToSlug extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->renameColumn('url','slug');
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->renameColumn('slug','url');
        });
    }
}