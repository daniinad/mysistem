<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bahann')->unsigned();
            $table->integer('id_pelanggann')->unsigned();
            $table->string('merk');
            $table->string('ukuran');
            $table->string('harga');
            $table->timestamps();

            $table->foreign('id_pelanggann')->references('id')->on('pelangganns')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_bahann')->references('id')->on('bahanns')
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
        Schema::dropIfExists('transaks');
    }
}
