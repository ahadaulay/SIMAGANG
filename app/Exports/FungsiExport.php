<?php

// app/Exports/DataExport.php

namespace App\Exports;

use App\Models\Fungsi;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class FungsiExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        // Define the headers here
        return [
            'id',
            'fungsi',
            'jumlah',
        ];
    }

    public function collection()
    {
        return Fungsi::leftJoin('peserta', 'fungsi.id', '=', 'peserta.fungsi_id')
        ->select('fungsi.id', 'fungsi.nama', DB::raw('count(peserta.id) as jumlah_peserta'))
        ->groupBy('fungsi.id', 'fungsi.nama')
        ->get();
    }
}

