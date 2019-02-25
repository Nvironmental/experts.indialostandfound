<?php namespace MantisEye\ExpertsSpeak\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMantiseyeExpertsspeak3 extends Migration
{
    public function up()
    {
        Schema::table('mantiseye_expertsspeak_', function($table)
        {
            $table->integer('photo_id')->unsigned()->change();
            $table->integer('user_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('mantiseye_expertsspeak_', function($table)
        {
            $table->integer('photo_id')->unsigned(false)->change();
            $table->integer('user_id')->unsigned(false)->change();
        });
    }
}
