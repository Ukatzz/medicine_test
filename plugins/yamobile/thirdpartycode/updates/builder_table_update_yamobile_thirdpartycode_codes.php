<?php

namespace Yamobile\ThirdPartyCode\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateYamobileThirdpartycodeCodes extends Migration
{
    public function up()
    {
        Schema::table('yamobile_thirdpartycode_codes', function ($table) {
            $table->integer('target_id');
        });
    }

    public function down()
    {
        Schema::table('yamobile_thirdpartycode_codes', function ($table) {
            $table->dropColumn('target_id');
        });
    }
}
