<?php

namespace Yamobile\ThirdPartyCode\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableCreateYamobileThirdpartycodeCodes extends Migration
{
    public function up()
    {
        Schema::create('yamobile_thirdpartycode_codes', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->boolean('is_enabled')->default(1);
            $table->text('code')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_thirdpartycode_codes');
    }
}
