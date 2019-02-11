<?php namespace MantisEye\Albumfields\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAlbumsTable extends Migration
{

    public function up()
    {
        Schema::table('graker_photoalbums_albums', function($table)
        {
            $table->text('location')->nullable();
            $table->text('century')->nullable();

        });
    }

    public function down()
    {
        if(Schema::hasColumn('graker_photoalbums_albums','location'))
            { //check whethere the column exists to drop it 
                Schema::table('graker_photoalbums_albums', function($table) {
                $table->dropColumn('location');
                $table->dropColumn('century');
            });
        
    }
    }
}