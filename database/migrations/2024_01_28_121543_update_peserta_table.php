<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peserta', function (Blueprint $table) {
            $table->dropForeign(['durasi_magang_id']);
            $table->dropColumn('durasi_magang_id');
            $table->integer('durasi')->nullable()->after('tanggal_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peserta', function (Blueprint $table) {
            $table->foreignId('durasi_magang_id')->constrained('durasi_magang');
            $table->dropColumn('durasi');
        });
    }
}
