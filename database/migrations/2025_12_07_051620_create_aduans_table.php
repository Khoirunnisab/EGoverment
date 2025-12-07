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
    Schema::create('aduans', function (Blueprint $table) {
        $table->id();
        $table->string('kode_aduan')->unique();
        $table->string('nama');
        $table->date('tanggal');
        $table->string('kategori');
        $table->string('lokasi');
        $table->text('deskripsi');
        $table->string('foto')->nullable();
        $table->enum('status',['diproses','selesai','ditolak'])->default('diproses');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aduans');
    }
};
