<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameYamobileServicesSubservices extends Migration
{
    public function up()
    {
        Schema::rename('yamobile_services_subservice', 'yamobile_services_services');
    }

    public function down()
    {
        Schema::rename('yamobile_services_services', 'yamobile_services_subservice');
    }
}