<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transakses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bahan')->unsigned();
            $table->integer('id_pelanggan')->unsigned();
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id')->on('pelanggans')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_bahan')->references('id')->on('bahans')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transakses');
    }
}
