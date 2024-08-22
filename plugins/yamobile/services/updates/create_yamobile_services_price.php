<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileServicesPrice extends Migration
{
    public function up()
    {
        Schema::create('yamobile_services_price', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('price')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_enabled')->default(1);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_services_price');
    }
}
