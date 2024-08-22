<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreatePriceToCategory extends Migration
{
    public function up()
    {
        Schema::create('yamobile_price_to_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('price_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['price_id','category_id'], 'yamobile_price_to_categories_primary');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_price_to_categories');
    }
}