<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qty');
            $table->double('jumlah',9,2);
            $table->string('id_menu',8)->index();
            $table->timestamps();

            $table->foreign('id_menu')->references('id_menu')->on('menu')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_menu');
    }
}
