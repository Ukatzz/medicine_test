<?php namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileStaffMembers9 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->text('images')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->dropColumn('images');
        });
    }
}
