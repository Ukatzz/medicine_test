<?php namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYamobileStaffMembers6 extends Migration
{
    public function up()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->dropColumn('meta_keywords');
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_staff_members', function($table)
        {
            $table->string('meta_keywords', 255)->nullable();
        });
    }
}
