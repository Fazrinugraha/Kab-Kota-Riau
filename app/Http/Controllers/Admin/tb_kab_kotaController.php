<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_kab_kota; 
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class tb_kab_kotaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua kabupaten/kota
        $kabKotas = tb_kab_kota::paginate(10);
        confirmDelete('Hapus Data!', 'Apakah anda yakin ingin menghapus data ini?'); 
    
        return view('pages.admin.tb_kab_kota.index', compact('kabKotas'));
    }
    
    // Function Tambah Kabupaten/Kota
    public function create()
    {
        return view('pages.admin.tb_kab_kota.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kabupaten_kota' => 'required|string|max:255', 
            'pusat_pemerintahan' => 'required|string|max:255',
            'bupati_walikota' => 'required|string|max:255',
            'tanggal_berdiri' => 'required|date',
            'luas_wilayah' => 'required|numeric',
            'jumlah_penduduk' => 'required|integer',
            'jumlah_kecamatan' => 'required|integer',
            'jumlah_kelurahan' => 'required|integer',
            'jumlah_desa' => 'required|integer',
            'url_peta_wilayah' => 'nullable|url',
            'deskripsi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Proses penyimpanan logo jika ada
        $logoName = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension(); 
            $logo->move(public_path('images'), $logoName); 
        }

        // Create kabupaten/kota
        $kabKota = tb_kab_kota::create([
            'kabupaten_kota' => $request->kabupaten_kota,
            'pusat_pemerintahan' => $request->pusat_pemerintahan,
            'bupati_walikota' => $request->bupati_walikota,
            'tanggal_berdiri' => $request->tanggal_berdiri,
            'luas_wilayah' => $request->luas_wilayah,
            'jumlah_penduduk' => $request->jumlah_penduduk,
            'jumlah_kecamatan' => $request->jumlah_kecamatan,
            'jumlah_kelurahan' => $request->jumlah_kelurahan,
            'jumlah_desa' => $request->jumlah_desa,
            'url_peta_wilayah' => $request->url_peta_wilayah,
            'deskripsi' => $request->deskripsi,
            'logo' => $logoName,
        ]);

        if ($kabKota) {
            Alert::success('Berhasil!', 'Kabupaten/Kota berhasil ditambahkan!');
            return redirect()->route('admin.tb_kab_kota.index');
        } else {
            Alert::error('Gagal!', 'Kabupaten/Kota gagal ditambahkan!');
            return redirect()->back();
        }
    }

    // Function Detail Kabupaten/Kota
    public function detail($id)
    {
        $kabKota = tb_kab_kota::findOrFail($id); 
        return view('pages.admin.tb_kab_kota.detail', compact('kabKota'));
    }

    // Function Edit dan Update Kabupaten/Kota
    public function edit($id)
    {
        $kabKota = tb_kab_kota::findOrFail($id);
        return view('pages.admin.tb_kab_kota.edit', compact('kabKota'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kabupaten_kota' => 'required|string|max:255',
            'pusat_pemerintahan' => 'required|string|max:255',
            'bupati_walikota' => 'required|string|max:255',
            'tanggal_berdiri' => 'required|date',
            'luas_wilayah' => 'required|numeric',
            'jumlah_penduduk' => 'required|integer',
            'jumlah_kecamatan' => 'required|integer',
            'jumlah_kelurahan' => 'required|integer',
            'jumlah_desa' => 'required|integer',
            'url_peta_wilayah' => 'nullable|url',
            'deskripsi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kabKota = tb_kab_kota::findOrFail($id);
        $kabKota->update($request->except('logo')); 

        // Proses penyimpanan logo jika ada
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($kabKota->logo) {
                $logoPath = public_path('images/' . $kabKota->logo);
                if (file_exists($logoPath)) {
                    unlink($logoPath); 
                }
            }

            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension(); 
            $logo->move(public_path('images'), $logoName); 
            $kabKota->logo = $logoName; 
        }

        $kabKota->save();

        Alert::success('Berhasil!', 'Kabupaten/Kota berhasil diperbarui!');
        return redirect()->route('admin.tb_kab_kota.index');
    }

    // Function Hapus Kabupaten/Kota
    public function delete($id)
    {
        $kabKota = tb_kab_kota::findOrFail($id);

        if ($kabKota) {
            // Jika ada logo, hapus file logo dari server
            if ($kabKota->logo) {
                $logoPath = public_path('images/' . $kabKota->logo);
                if (file_exists($logoPath)) {
                    unlink($logoPath); 
                }
            }

            $kabKota->delete(); 
            Alert::success('Berhasil!', 'Kabupaten/Kota berhasil dihapus!');
            return redirect()->route('admin.tb_kab_kota.index');
        } else {
            Alert::error('Gagal!', 'Kabupaten/Kota gagal dihapus!');
            return redirect()->back();
        }
    }
}