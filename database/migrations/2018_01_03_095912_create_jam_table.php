<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_petugas',8)->index();
            $table->enum('shift', ['pagi','sore']);
            $table->timestamps();

            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_kerja');
    }
}
