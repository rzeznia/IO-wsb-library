<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateLocalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('regal_id')->unsigned();
            $table->integer('shelf');
            $table->integer('position');
            $table->timestamps();
        });

        Schema::table('localizations', function (Blueprint $table) {
            $table->foreign('regal_id')->references('id')->on('regals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localizations', function (Blueprint $table) {
            $table->dropForeign('localizations_regal_id_foreign');
        });
        Schema::dropIfExists('localizations');
    }
}
