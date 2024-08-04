<?php

namespace App\Http\Controllers;

use App\Helpers\UploadFile;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarcodeController extends Controller
{
    public function generateBarcode($id)
    {
        // URL yang akan dijadikan isi QR Code
        $url = "http://pendataan_magang.test/peserta/{$id}/detail";

        // Generate QR Code dengan link sebagai data
        $qrCode = QrCode::size(300)->generate($url);


        // Tampilkan di browser
        return view('Peserta.barcode', compact('qrCode'));
    }
}


