<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjiKompetisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uji_kompetisis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor_user');
            $table->string('nomor_uji', 8)->nullable();
            $table->integer('kelas_id');
            $table->string('nama_uji');
            $table->text('deskripsi')->nullable();
            $table->json('soal');
            $table->integer('kkm')->default('50'); //presentasi
            $table->integer('kesempatan');
            $table->dateTime('waktu_tayang')->nullable();
            $table->dateTime('batas_tayang')->nullable();
            $table->enum('publish', ['Public', 'Private'])->nullable();
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
        Schema::dropIfExists('uji_kompetisis');
    }
}
