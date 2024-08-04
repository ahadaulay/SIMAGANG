<?php

// app/Exports/DataExport.php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        // Define the headers here
        return [
            'ID',
            'nama',
            'tanggal lahir',
            'alamat',
            'asal instansi',
            'fungsi',
            'tanggal masuk',
            'tanggal keluar',
            'durasi',
            'foto',
            'telepon',
            'email',
            'created at',
            'updated at',
            // Add more columns as needed
        ];
    }

    public function collection()
    {
        return Peserta::with(['asalInstansi', 'fungsi'])
        ->select(
            'peserta.id',
            'peserta.nama',
            'peserta.tanggal_lahir',
            'peserta.alamat',
            'asal_instansi.nama as asal_instansi',
            'fungsi.nama as fungsi',
            'peserta.tanggal_masuk',
            'peserta.tanggal_keluar',
            'peserta.foto',
            'peserta.telepon',
            'peserta.email',
            'peserta.created_at',
            'peserta.updated_at'
        )
        ->join('asal_instansi', 'peserta.asal_instansi_id', '=', 'asal_instansi.id')
        ->join('fungsi', 'peserta.fungsi_id', '=', 'fungsi.id')
        ->get();
    }
}

