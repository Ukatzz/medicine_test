<?php

namespace Yamobile\ThirdPartyCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSortOrderToCodes extends Migration
{
    public function up()
    {
        Schema::table('yamobile_thirdpartycode_codes', function ($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
        Schema::table('yamobile_thirdpartycode_codes', function ($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
