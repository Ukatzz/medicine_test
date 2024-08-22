<?php namespace Yamobile\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileServicesServices2 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->text('text_inside_block1');
            $table->string('img_block2');
            $table->text('text_block2');
            $table->text('text_inside_block2');
            $table->string('img_block3');
            $table->text('text_inside_block3');
            $table->renameColumn('img_block', 'img_block1');
            $table->renameColumn('text_block', 'text_block1');
            $table->renameColumn('tixt_inside_block', 'text_block3');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_services_services', function($table)
        {
            $table->dropColumn('text_inside_block1');
            $table->dropColumn('img_block2');
            $table->dropColumn('text_block2');
            $table->dropColumn('text_inside_block2');
            $table->dropColumn('img_block3');
            $table->dropColumn('text_inside_block3');
            $table->renameColumn('img_block1', 'img_block');
            $table->renameColumn('text_block1', 'text_block');
            $table->renameColumn('text_block3', 'tixt_inside_block');
        });
    }
}
