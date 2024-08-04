<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class FilterController extends Controller
{
 

    function filterPeserta()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Filter.peserta');
    }
    
    function hasilFilterPeserta(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
        

        $data = Peserta::whereYear('tanggal_keluar', $request->tahun)->get();

        return view('Peserta.index',compact(['data']));
    }
    
}