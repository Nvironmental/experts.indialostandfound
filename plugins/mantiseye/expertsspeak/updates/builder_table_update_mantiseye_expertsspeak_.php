<?php namespace MantisEye\ExpertsSpeak\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMantiseyeExpertsspeak extends Migration
{
    public function up()
    {
        Schema::table('mantiseye_expertsspeak_', function($table)
        {
            $table->integer('photo_id')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('mantiseye_expertsspeak_', function($table)
        {
            $table->integer('photo_id')->nullable(false)->change();
            $table->integer('user_id')->nullable(false)->change();
        });
    }
}
