<?php namespace MantisEye\ExpertsSpeak\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMantiseyeExpertsspeak2 extends Migration
{
    public function up()
    {
        Schema::table('mantiseye_expertsspeak_', function($table)
        {
            $table->string('relic_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mantiseye_expertsspeak_', function($table)
        {
            $table->dropColumn('relic_name');
            $table->dropColumn('user_name');
            $table->dropColumn('user_email');
        });
    }
}
