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
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->integer('nisn');
            $table->integer('nik')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah')->nullable();
            $table->integer('umur')->nullable();
            $table->string('status')->default('Menunggu')->nullable();
            $table->char('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('no_telepon');
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('disabilitas')->nullable();
            $table->string('nomor')->nullable();
            $table->integer('kip')->nullable();
            $table->string('nama_ayah_kandung')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('nama_wali')->nullable();
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('murid');
    }
};
