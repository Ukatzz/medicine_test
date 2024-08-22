<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameYamobileServicesServices extends Migration
{
    public function up()
    {
        Schema::rename('yamobile_services_services', 'yamobile_services_categories');
    }

    public function down()
    {
        Schema::rename('yamobile_services_categories', 'yamobile_services_services');
    }
}