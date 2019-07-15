<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenumpangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penumpang');
    }
}
