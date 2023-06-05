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
    Schema::create('alternatif_wisata', function (Blueprint $table) {
        $table->id();
        $table->string('nama_wisata');
        $table->string('alamat_wisata');
        $table->string('kategori');
        $table->integer('harga_tiket_masuk');
        $table->string('rating');
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
