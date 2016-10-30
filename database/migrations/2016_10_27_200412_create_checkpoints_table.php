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
            $table->integer('competition_id');
            $table->timestamps();

            $table->foreign('competition_id')
                ->references('id')->on('competitions')
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
