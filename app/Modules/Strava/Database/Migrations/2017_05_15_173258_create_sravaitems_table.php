<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSravaitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stravas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('strava_id')->unique();
            $table->string('access_token')->unique();
            $table->boolean('register')->default(false);
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stravas');
    }
}
