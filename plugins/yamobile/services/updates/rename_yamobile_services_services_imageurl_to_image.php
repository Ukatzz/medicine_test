<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameYamobileServicesSubservicesImageurlToImage extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->renameColumn('image_url','image');
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_services', function ($table) {
            $table->renameColumn('image','image_url');
        });
    }
}