<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('supirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_supir');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->text('gambar');
            $table->integer('usia');
            $table->string('kinerja');
            $table->string('status');
            $table->string('deskripsi');
            $table->boolean('sehat');
            $table->boolean('profesioanl');
            $table->boolean('driver_lisensi_lengkap');
            $table->boolean('berpengalaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supirs');
    }
};
