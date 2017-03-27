<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('lat', 10,7);
            $table->decimal('long', 10,7);
            $table->integer('space_id')->unsigned();
            $table->foreign('space_id')->references('id')->on('spaces');
            $table->integer('order_id');
            $table->timestamps();
        });

       
        Schema::table('markers', function(Blueprint $table)
        {
            DB::statement(
                "ALTER TABLE markers ADD pointdata GEOMETRY AFTER space_id"
            );  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markers');
    }
}
