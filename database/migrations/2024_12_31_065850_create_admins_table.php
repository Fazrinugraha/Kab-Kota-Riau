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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama admin
            $table->date('tanggal_lahir'); // Tanggal lahir admin
            $table->string('tempat_lahir'); // Tempat lahir admin
            $table->string('email')->unique(); // Email admin
            $table->string('no_hp'); // Nomor HP admin
            $table->text('alamat'); // Alamat admin
            $table->string('kelas'); // Kelas admin
            $table->string('prodi'); // Program studi admin
            $table->string('jurusan'); // Jurusan admin
            $table->string('foto')->nullable(); // Foto admin, nullable jika opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
