<?php

// app/Http/Controllers/ExcelController.php

namespace App\Http\Controllers;

use App\Exports\AsalInstansiExport;
use App\Exports\DataExport;
use App\Exports\FungsiExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function generateExcel()
    {
        return Excel::download(new DataExport, 'peserta.xlsx');
    }

    public function generateFungsi()
    {
        return Excel::download(new FungsiExport, 'fungsi.xlsx');
    }

    public function generateAsalInstansi()
    {
        return Excel::download(new AsalInstansiExport, 'asalinstansi.xlsx');
    }
}

