<?php namespace MantisEye\Reliccordinates\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddCoordsFields extends Migration
{

    public function up()
    {
        Schema::table('graker_photoalbums_photos', function($table)
        {
          //adding extra columns to the Photo Model, to give provisions for Lat and Long cordinates
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
        });
    }

    public function down()
    {
        $table->dropDown([
            'lat',
            'long'
        ]);
    }

}
