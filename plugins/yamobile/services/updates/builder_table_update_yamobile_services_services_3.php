<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices3 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->string('img_block1', 255)->nullable()->change();
            $table->text('text_block1')->nullable()->change();
            $table->smallInteger('text_block3')->nullable()->change();
            $table->text('text_inside_block1')->nullable()->change();
            $table->string('img_block2', 255)->nullable()->change();
            $table->text('text_block2')->nullable()->change();
            $table->text('text_inside_block2')->nullable()->change();
            $table->string('img_block3', 255)->nullable()->change();
            $table->text('text_inside_block3')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->string('img_block1', 255)->nullable(false)->change();
            $table->text('text_block1')->nullable(false)->change();
            $table->smallInteger('text_block3')->nullable(false)->change();
            $table->text('text_inside_block1')->nullable(false)->change();
            $table->string('img_block2', 255)->nullable(false)->change();
            $table->text('text_block2')->nullable(false)->change();
            $table->text('text_inside_block2')->nullable(false)->change();
            $table->string('img_block3', 255)->nullable(false)->change();
            $table->text('text_inside_block3')->nullable(false)->change();
        });
    }
}
