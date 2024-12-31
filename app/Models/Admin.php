<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory; 
        // Menentukan nama tabel secara eksplisit (opsional jika nama tabel sudah sesuai konvensi)
        protected $table = 'admins';

        // Menentukan kolom yang dapat diisi secara mass-assignment
        protected $fillable = [
            'nama',
            'tanggal_lahir',
            'tempat_lahir',
            'email',
            'no_hp',
            'alamat',
            'kelas',
            'prodi',
            'jurusan',
            'foto',
        ];
}
