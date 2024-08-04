<?php

namespace App\Http\Controllers;

use App\Models\Asal;
use Illuminate\Http\Request;

class AsalController extends Controller
{
    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Asal::all();

        return view('Asal.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Asal.create');
    }

    public function store(Request $request)
    {

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);

        Asal::create($data);

        return redirect ('/asal');
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }


        $data= Asal::find($id);

        return view('Asal.edit',compact('data'));
    }

    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        // Validate the request data
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);
    
        // Find the Penduduk record by ID
        $data = Asal::findOrFail($id);
    
        // Update the Penduduk record with the validated data
        $data->update($validatedData);
    
        return redirect('/asal');
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Asal::find($id);

        $data->delete();

        return redirect('/asal');
    }
    
}