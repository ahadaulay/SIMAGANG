<?php

namespace App\Http\Controllers;

use App\Models\Asal;
use DateTime;
use App\Models\Durasi;
use App\Models\Fungsi;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Peserta::all();

        return view('Peserta.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $asal = Asal::all();
        $fungsi = Fungsi::all();
        $durasi = Durasi::all();

        return view('Peserta.create',compact(['asal','fungsi','durasi']));
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        $data = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_instansi_id' => 'required',
            'fungsi_id' => 'required',
            'tanggal_masuk' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'foto' => 'required',
            'tanggal_keluar' => 'required',
        ]);
    
        $data = new Peserta();
        $data->nama = $request->input('nama');
        $data->tanggal_lahir = $request->input('tanggal_lahir');
        $data->alamat = $request->input('alamat');
        $data->asal_instansi_id = $request->input('asal_instansi_id');
        $data->fungsi_id = $request->input('fungsi_id');
        $data->tanggal_masuk = $request->input('tanggal_masuk');
        $data->tanggal_keluar = $request->input('tanggal_keluar');
        
        // Calculate duration
        $tanggalMasuk = new DateTime($data->tanggal_masuk);
        $tanggalKeluar = new DateTime($data->tanggal_keluar);
        $duration = $tanggalMasuk->diff($tanggalKeluar)->days;
        
        $data->durasi = $duration;
    
        $data->telepon = $request->input('telepon');
        $data->email = $request->input('email');
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->storeAs('fotopeserta', $fileName, 'public');
            $data->foto = $fileName;
        } else {
            $data->foto = '';
        }
    
        $data->save();
    
        return redirect('/peserta');
    }
    

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $asal = Asal::all();
        $fungsi = Fungsi::all();
        $durasi = Durasi::all();


        $data= Peserta::find($id);

        return view('Peserta.edit',compact('data','asal','fungsi','durasi'));
    }

    public function detail($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }


        $data= Peserta::find($id);

        return view('Peserta.detail',compact('data'));
    }

    public function cetak($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }


        $data= Peserta::find($id);

        return view('Peserta.cetak',compact('data'));
    }

    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        // Validate the request data
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_instansi_id' => 'required',
            'fungsi_id' => 'required',
            'tanggal_masuk' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);
    
        // Find the Penduduk record by ID
        $data = Peserta::findOrFail($id);

        $data -> nama =  $request->input('nama');
        $data -> tanggal_lahir =  $request->input('tanggal_lahir');
        $data -> alamat =  $request->input('alamat');
        $data -> asal_instansi_id =  $request->input('asal_instansi_id');
        $data -> fungsi_id =  $request->input('fungsi_id');
        $data -> tanggal_masuk =  $request->input('tanggal_masuk');
        $data -> tanggal_keluar =  $request->input('tanggal_keluar');

                // Calculate duration
                $tanggalMasuk = new DateTime($data->tanggal_masuk);
                $tanggalKeluar = new DateTime($data->tanggal_keluar);
                $duration = $tanggalMasuk->diff($tanggalKeluar)->days;
                
                $data->durasi = $duration;
                
        $data -> telepon =  $request->input('telepon');
        $data -> email =  $request->input('email');

        if ($request->hasFile('foto')) {
            // hapus gambar lama
            Storage::delete('fotopeserta/' . $data->foto);
            // tambah yang baru dengan nama file di hash
            $file = $request->file('foto');
            $fileName = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->storeAs('fotopeserta', $fileName, 'public');
            $data->foto = $fileName;
        } 
    
        $data->save();
    
        return redirect('/peserta');
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Peserta::find($id);

        Storage::delete('fotopeserta/' . $data->foto);

        $data->delete();

        return redirect('/peserta');
    }

    function getPesertaByDurasi($besar,$kecil)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Peserta::where('durasi', '>', $besar)
        ->where('durasi', '<=', $kecil)
        ->get();


        return view('Peserta.index',compact(['data']));
    }
    
}