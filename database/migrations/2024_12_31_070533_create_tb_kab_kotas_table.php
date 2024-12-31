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
        Schema::create('tb_kab_kotas', function (Blueprint $table) {
            $table->id();
            $table->string('kabupaten_kota');
            $table->string('pusat_pemerintahan');
            $table->string('bupati_walikota');
            $table->date('tanggal_berdiri');
            $table->decimal('luas_wilayah', 10, 2); // Format desimal untuk luas wilayah
            $table->integer('jumlah_penduduk');
            $table->integer('jumlah_kecamatan');
            $table->integer('jumlah_kelurahan');
            $table->integer('jumlah_desa');
            $table->string('url_peta_wilayah')->nullable(); // Nullable jika URL peta opsional
            $table->text('deskripsi')->nullable(); // Nullable untuk deskripsi
            $table->string('logo')->nullable(); // Nullable untuk logo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kab_kotas');
    }
};
