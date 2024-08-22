<?php

namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddIsActiveToMembers extends Migration
{
    public function up()
    {
        Schema::table('yamobile_staff_members', function ($table)
        {
            $table->boolean('is_active')->default(1);
        });
    }

    public function down()
    {
        Schema::table('yamobile_staff_members', function ($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
