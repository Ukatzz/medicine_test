<?php namespace Ukatz\ModalForm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUkatzModalform extends Migration
{
    public function up()
    {
        Schema::create('ukatz_modalform_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ukatz_modalform_');
    }
}
