<?php

namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMembersToPositions extends Migration
{
    public function up()
    {
        Schema::create('yamobile_staff_members_to_positions', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('member_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->primary(['member_id','position_id'], 'yamobile_staff_members_to_positions_primary');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_staff_members_to_positions');
    }
}
