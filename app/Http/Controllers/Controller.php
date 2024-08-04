<?php

namespace App\Http\Controllers;

use App\Models\Asal;
use App\Models\Durasi;
use App\Models\Fungsi;
use App\Models\Peserta;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
    {

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $jumlahPesertaDurasi30 = Peserta::where('durasi', '>=', 1)
        ->where('durasi', '<=', 31)
        ->count();

        $jumlahPesertaDurasi60 = Peserta::where('durasi', '>', 31)
        ->where('durasi', '<=', 62)
        ->count();

        $jumlahPesertaDurasi90 = Peserta::where('durasi', '>', 62)
        ->where('durasi', '<=', 93)
        ->count();

        $jumlahPesertaDurasi120 = Peserta::where('durasi', '>', 93)
        ->where('durasi', '<=', 124)
        ->count();

        

                    $dataFungsiDanJumlahPeserta = Fungsi::leftJoin('peserta', 'fungsi.id', '=', 'peserta.fungsi_id')
                    ->select('fungsi.id', 'fungsi.nama', DB::raw('count(peserta.id) as jumlah_peserta'))
                    ->groupBy('fungsi.id', 'fungsi.nama')
                    ->get();

                    $dataAsalInstansiDanJumlahPeserta = Asal::leftJoin('peserta', 'asal_instansi.id', '=', 'peserta.asal_instansi_id')
                    ->select('asal_instansi.id', 'asal_instansi.nama', DB::raw('count(peserta.id) as jumlah_peserta'))
                    ->groupBy('asal_instansi.id', 'asal_instansi.nama')
                    ->get();

                    //fungsi
                    $fungsiData = Peserta::selectRaw('fungsi.nama as fungsi_nama, COUNT(*) as count')
                    ->join('fungsi', 'peserta.fungsi_id', '=', 'fungsi.id')
                    ->groupBy('fungsi.nama')
                    ->get();
        
                    $fungsiLabels = $fungsiData->pluck('fungsi_nama')->toArray();
                    $fungsiCounts = $fungsiData->pluck('count')->toArray();

                    //Instansi
                    $instansiData = Peserta::selectRaw('asal_instansi.nama as instansi_nama, COUNT(*) as count')
                    ->join('asal_instansi', 'peserta.asal_instansi_id', '=', 'asal_instansi.id')
                    ->groupBy('asal_instansi.nama')
                    ->get();

                    $instansiLabels = $instansiData->pluck('instansi_nama')->toArray();
                    $instansiCounts = $instansiData->pluck('count')->toArray();

                    //durasi
                    $durasiArray = Peserta::select(DB::raw('CASE 
                    WHEN durasi BETWEEN 1 AND 31 THEN "1 bulan" 
                    WHEN durasi BETWEEN 32 AND 62 THEN "2 bulan" 
                    WHEN durasi BETWEEN 63 AND 93 THEN "3 bulan" 
                    WHEN durasi BETWEEN 94 AND 123 THEN "4 bulan" 
                    ELSE "Lainnya" 
                    END AS durasi'), 
                    DB::raw('COUNT(*) as jumlah'))
            ->groupBy(DB::raw('CASE 
                    WHEN durasi BETWEEN 1 AND 31 THEN "1 bulan" 
                    WHEN durasi BETWEEN 32 AND 62 THEN "2 bulan" 
                    WHEN durasi BETWEEN 63 AND 93 THEN "3 bulan" 
                    WHEN durasi BETWEEN 94 AND 123 THEN "4 bulan" 
                    ELSE "Lainnya" 
                    END'))
            ->get()
            ->map(function ($item) {
                return [
                    'durasi' => $item->durasi,
                    'jumlah' => $item->jumlah,
                ];
            })
            ->toArray();

// Labels dan Counts untuk grafik durasi
$durasiLabels = array_column($durasiArray, 'durasi');
$durasiCounts = array_column($durasiArray, 'jumlah');



                
                

        return view('dashboard',compact(['durasiCounts','durasiLabels','instansiCounts','instansiLabels','fungsiCounts','fungsiLabels','jumlahPesertaDurasi30','jumlahPesertaDurasi60','jumlahPesertaDurasi90','jumlahPesertaDurasi120','dataFungsiDanJumlahPeserta','dataAsalInstansiDanJumlahPeserta']));
    }
}
