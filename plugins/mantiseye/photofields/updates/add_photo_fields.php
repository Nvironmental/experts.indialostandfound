<?php namespace MantisEye\Photofields\Update;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddPhotoFields extends Migration
{

    public function up()
    {
        Schema::table('graker_photoalbums_photos', function($table)
        {
          //adding extra columns to the Photo Model, to give provisions for Location, Lat and Long cordinates
          $table->string('photo_location')->nullable();
          $table->string('photo_latitude')->nullable();  
          $table->string('photo_longitude')->nullable();
        });
    }

    public function down()
    {
        if(Schema::hasColumn('graker_photoalbums_photos','photo_location')){ //check whethere the column exists to drop it 
            Schema::table('graker_photoalbums_photos', function($table) {
                $table->dropColumn('photo_location');
                $table->dropColumn('photo_latitude');
                $table->dropColumn('photo_longitude');
            });
        }
       
    }

}
