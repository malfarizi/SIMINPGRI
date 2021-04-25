<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id_pengajuan');
            $table->string('foto');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_ktp');
            $table->string('email');
            $table->string('agama');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('no_telp');
            $table->string('tugas');
            $table->string('tempat_kerja');
            $table->date('tanggal_mulai_kerja');
            $table->string('status_pns');
            $table->string('golongan');
            $table->string('tingkat_sekolah');
            $table->string('status_lembaga');
            $table->string('mengajar');
            $table->string('status');
            $table->unsignedInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
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
        Schema::dropIfExists('pengajuan');
    }
}
