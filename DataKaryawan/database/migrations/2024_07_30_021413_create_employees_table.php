<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik_karyawan');
            $table->string('nama_panggilan')->nullable();
            $table->enum('jenis_kelamin', ['male', 'female']);
            $table->string('pkkwt')->nullable();
            $table->date('tanggal_kerja');
            $table->date('tanggal_kontrak')->nullable();
            $table->date('tanggal_diangkat_tetap')->nullable();
            $table->string('masa_kerja');
            $table->string('status');
            $table->string('jabatan');
            $table->string('nuptk')->nullable();
            $table->string('tempat_lahir');
            $table->integer('usia');
            $table->string('agama');
            $table->string('email')->unique();
            $table->string('hobi')->nullable();
            $table->string('status_perkawinan');
            $table->date('tanggal_pernikahan')->nullable();
            $table->string('nomor_surat_nikah')->nullable();
            $table->text('alamat_ktp');
            $table->string('nomor_hp');
            $table->string('kontak_darurat')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('no_ktp');
            $table->string('pendidikan_terakhir');
            $table->string('instansi')->nullable();
            $table->year('tahun_lulus')->nullable();
            $table->string('tempat_pelatihan')->nullable();
            $table->string('pengalaman_berorganisasi')->nullable();
            $table->string('nama_istri_suami')->nullable();
            $table->string('nama_anak')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
