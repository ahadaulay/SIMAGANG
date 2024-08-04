<?php

namespace App\Http\Controllers;

use App\Models\Durasi;
use App\Models\Peserta;
use Illuminate\Http\Request;

class DurasiController extends Controller
{
    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Durasi::all();

        return view('Durasi.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Durasi.create');
    }

    public function store(Request $request)
    {

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = $request->validate([
            'durasi' => 'required',
        ]);

        Durasi::create($data);

        return redirect ('/durasi');
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }


        $data= Durasi::find($id);

        return view('Durasi.edit',compact('data'));
    }

    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        // Validate the request data
        $validatedData = $request->validate([
            'durasi' => 'required',
        ]);
    
        // Find the Penduduk record by ID
        $data = Durasi::findOrFail($id);
    
        // Update the Penduduk record with the validated data
        $data->update($validatedData);
    
        return redirect('/durasi');
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Durasi::find($id);

        $data->delete();

        return redirect('/durasi');
    }



    
}