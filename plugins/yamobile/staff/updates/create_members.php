<?php

namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMembers extends Migration
{
    public function up()
    {
        Schema::create('yamobile_staff_members', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->string('slug');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_staff_members');
    }
}
