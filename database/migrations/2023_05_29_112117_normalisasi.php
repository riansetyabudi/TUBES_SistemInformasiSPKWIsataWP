<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('normalisasi', function (Blueprint $table) {
        $table->id();
        $table->string('nama_wisata');
        $table->integer('jumlah_pengunjung');
        $table->string('fasilitas');
        $table->integer('harga_tiket_masuk');
        $table->float('rating');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
