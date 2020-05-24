<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('title_id')->unsigned();
            $table->biginteger('publisher_id')->unsigned();
            $table->integer('release');
            $table->string('ISBN');
            $table->float('price');
            $table->integer('pages');
            $table->timestamps();
        });

        Schema::table('releases', function (Blueprint $table) {
            $table->foreign('title_id')->references('id')->on('titles');
            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('releases', function (Blueprint $table) {
            $table->dropForeign('releases_publisher_id_foreign');
            $table->dropForeign('releases_title_id_foreign');
        });
        Schema::dropIfExists('releases');
    }
}
