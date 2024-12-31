<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tb_kab_kota extends Model
{
        // Menentukan nama tabel (opsional jika sesuai dengan konvensi Laravel)
        protected $table = 'tb_kab_kotas';

        // Menentukan kolom yang dapat diisi secara mass-assignment
        protected $fillable = [
            'kabupaten_kota',
            'pusat_pemerintahan',
            'bupati_walikota',
            'tanggal_berdiri',
            'luas_wilayah',
            'jumlah_penduduk',
            'jumlah_kecamatan',
            'jumlah_kelurahan',
            'jumlah_desa',
            'url_peta_wilayah',
            'deskripsi',
            'logo',
        ];
}
