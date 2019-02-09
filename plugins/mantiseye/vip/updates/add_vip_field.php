<?php namespace MantisEye\Vip\Updates; //current folder namespace

use Schema;
use October\Rain\Database\Updates\Migration;

class AddVipField extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->tinyInteger('vip')->default(0); //adding extra column to Users table of 'Vip' as a tinyInt field and setting the default value of that field as flase
        });
    }

    public function down()
    {
        $table->dropDown([
            'vip'
        ]);
    }

}
