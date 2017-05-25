<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkpoints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('kilomeeter');
            $table->float('lattitude')->nullable();
            $table->float('longditude')->nullable();
            $table->integer('sort');
            $table->integer('track_id');
            $table->timestamps();

            $table->foreign('track_id')
                ->references('id')->on('tracks')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkpoints');
    }
}
