<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahannsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahanns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelanggann')->unsigned();
            $table->string('nama');
            $table->string('merk');
            $table->string('ukuran');
            $table->string('harga');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('id_pelanggann')->references('id')->on('pelangganns')
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
        Schema::dropIfExists('bahanns');
    }
}
