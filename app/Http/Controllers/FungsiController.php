<?php

namespace App\Http\Controllers;

use App\Models\Fungsi;
use Illuminate\Http\Request;

class FungsiController extends Controller
{
    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Fungsi::all();

        return view('Fungsi.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Fungsi.create');
    }

    public function store(Request $request)
    {

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = $request->validate([
            'nama' => 'required',
            'pembimbing' => 'required',
        ]);

        Fungsi::create($data);

        return redirect ('/fungsi');
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }


        $data= Fungsi::find($id);

        return view('Fungsi.edit',compact('data'));
    }

    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        // Validate the request data
        $validatedData = $request->validate([
            'nama' => 'required',
            'pembimbing' => 'required',
        ]);
    
        // Find the Penduduk record by ID
        $data = Fungsi::findOrFail($id);
    
        // Update the Penduduk record with the validated data
        $data->update($validatedData);
    
        return redirect('/fungsi');
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Fungsi::find($id);

        $data->delete();

        return redirect('/fungsi');
    }
    
}