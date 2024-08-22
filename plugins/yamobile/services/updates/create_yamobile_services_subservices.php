<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateYamobileServicesSubservice extends Migration
{
    public function up()
    {
        Schema::create('yamobile_services_subservice', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('name')->nullable();
            $table->text('content')->nullable();
            $table->string('image_url')->nullable();
            $table->integer('category_id')->primory();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_services_subservice');
    }
}