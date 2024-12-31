<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\tb_kab_kota;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $admins = Admin::count();
        $tb_kab_kotas = Admin::count();

        return view('pages.admin.index', compact('admins',  'tb_kab_kotas'));

    }

}
