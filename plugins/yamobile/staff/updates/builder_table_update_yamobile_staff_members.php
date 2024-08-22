<?php namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileStaffMembers extends Migration
{
    public function up()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->string('certificates')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->dropColumn('certificates');
        });
    }
}
