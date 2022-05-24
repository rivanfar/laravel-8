<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBeasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dosen', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('NIM');
            $table->string('Nama');
            $table->string('Jenis_Kelamin');
            $table->string('Prodi');
            $table->string('Pendidikan');
            $table->softDeletes();
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
        Schema::dropIfExists('data_beasiswa');
    }
}