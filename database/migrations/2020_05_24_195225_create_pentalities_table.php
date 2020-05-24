<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreatePentalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pentalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('hire_id')->unsigned();
            $table->integer('amount')->nullable();
            $table->timestamp('due_date');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });

        Schema::table('pentalities', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('hire_id')->references('id')->on('hires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pentalities', function (Blueprint $table) {
            $table->dropForeign('pentalities_hire_id_foreign');
            $table->dropForeign('pentalities_user_id_foreign');
        });
        Schema::dropIfExists('pentalities');
    }
}
