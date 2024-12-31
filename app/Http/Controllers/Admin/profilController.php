<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class profilController extends Controller
{
    public function show()
    {
        // Ambil data admin yang sedang login
        // Jika Anda tidak menggunakan autentikasi, Anda bisa menggunakan ID admin tertentu
        $admin = Admin::findOrFail(1); // Ganti 1 dengan ID admin yang sesuai

        // Kembalikan tampilan profil dengan data admin
        return view('pages.admin.profile', compact('admin'));
    }

    public function edit()
    {
        // Ambil data admin yang ingin diedit
        $admin = Admin::findOrFail(1); // Ganti 1 dengan ID admin yang sesuai

        // Kembalikan tampilan edit dengan data admin
        return view('pages.admin.edit_profile', compact('admin'));
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Validasi untuk foto
            // Tambahkan validasi lain yang diperlukan
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = Admin::findOrFail(1); // Ganti 1 dengan ID admin yang sesuai

        // Proses penyimpanan foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($admin->foto) {
                $fotoPath = public_path('images/' . $admin->foto);
                if (file_exists($fotoPath)) {
                    unlink($fotoPath); 
                }
            }

            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension(); 
            $foto->move(public_path('images'), $fotoName); 
            $admin->foto = $fotoName; 
        }

        // Simpan perubahan lainnya jika ada
        $admin->save();

        Alert::success('Berhasil!', 'Profil admin berhasil diperbarui!');
        return redirect()->route('admin.profile');
    }
}