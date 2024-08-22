<?php

namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategories extends Migration
{
    public function up()
    {
        Schema::create('yamobile_staff_categories', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_staff_categories');
    }
}
