<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->foreignId('asal_instansi_id')->constrained('asal_instansi');
            $table->foreignId('fungsi_id')->constrained('fungsi');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable();
            $table->foreignId('durasi_magang_id')->constrained('durasi_magang');
            $table->string('foto')->nullable();
            $table->string('telepon');
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
        Schema::dropIfExists('peserta');
    }
}
