<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('release_id')->unsigned();
            $table->biginteger('localisation_id')->unsigned();
            
            $table->timestamps();
        });

        Schema::table('pieces', function (Blueprint $table) {
            $table->foreign('release_id')->references('id')->on('releases');
            $table->foreign('localisation_id')->references('id')->on('localisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pieces', function (Blueprint $table) {
            $table->dropForeign('pieces_localisation_id_foreign');
        });
        
        Schema::dropIfExists('pieces');
    }
}
