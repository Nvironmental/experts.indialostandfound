<?php namespace MantisEye\ExpertsSpeak\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMantiseyeExpertsspeak extends Migration
{
    public function up()
    {
        Schema::create('mantiseye_expertsspeak_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('comment');
            $table->boolean('is_approved')->default(0);
            $table->integer('user_id')->unsigned();
            $table->integer('photo_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mantiseye_expertsspeak_');
    }
}
