<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->enum('type', array('circle', 'polygon'));
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();  
            $table->timestamps();
        });
      
        // Manually add in GEOMETRY type column
        // Schema::table('spaces', function(Blueprint $table)
        // {
        //     DB::statement(
        //         "ALTER TABLE spaces ADD geodata GEOMETRY AFTER user_id"
        //     );
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('spaces');
    }
}
