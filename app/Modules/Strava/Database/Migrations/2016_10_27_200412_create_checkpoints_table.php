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
            $table->string('name')->default('');
            $table->integer('kilomeeter')->default(0);
            $table->float('lattitude')->default(0);
            $table->float('longditude')->default(0);
            $table->integer('track_id')->default(0)->index();
            $table->timestamps();
            $table->softDeletes();

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
