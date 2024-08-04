<?php

namespace App\Models;

use App\Models\Asal;
use App\Models\Durasi;
use App\Models\Fungsi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peserta extends Model
{
    use HasFactory;
    protected $table='peserta';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function asalInstansi()
    {
        return $this->belongsTo(Asal::class, 'asal_instansi_id');
    }

    public function fungsi()
    {
        return $this->belongsTo(Fungsi::class, 'fungsi_id');
    }

    public function durasi()
    {
        return $this->belongsTo(Durasi::class, 'durasi_magang_id');
    }

    
}
