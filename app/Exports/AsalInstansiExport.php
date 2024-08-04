<?php

// app/Exports/DataExport.php

namespace App\Exports;

use App\Models\Asal;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AsalInstansiExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        // Define the headers here
        return [
            'id',
            'asal instansi',
            'jumlah',
        ];
    }

    public function collection()
    {
        return Asal::leftJoin('peserta', 'asal_instansi.id', '=', 'peserta.asal_instansi_id')
        ->select('asal_instansi.id', 'asal_instansi.nama', DB::raw('count(peserta.id) as jumlah_peserta'))
        ->groupBy('asal_instansi.id', 'asal_instansi.nama')
        ->get();
    }
}

