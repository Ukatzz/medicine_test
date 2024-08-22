<?php

namespace Yamobile\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMembersToCategories extends Migration
{
    public function up()
    {
        Schema::create('yamobile_staff_members_to_categories', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('member_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['member_id','category_id'], 'yamobile_staff_members_to_categories_primary');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_staff_members_to_categories');
    }
}
