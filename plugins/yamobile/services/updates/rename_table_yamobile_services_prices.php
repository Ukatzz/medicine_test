<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesPrices extends Migration
{
    public function up()
    {
        Schema::rename('yamobile_services_price', 'yamobile_services_prices');
    }

    public function down()
    {
        Schema::rename('yamobile_services_prices', 'yamobile_services_price');
    }
}
