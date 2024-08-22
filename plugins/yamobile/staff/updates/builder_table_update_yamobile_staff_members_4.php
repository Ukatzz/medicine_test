<?php namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileStaffMembers4 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->dropColumn('certificates');
            $table->dropColumn('photos');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->string('certificates', 255)->nullable();
            $table->smallInteger('photos');
        });
    }
}
