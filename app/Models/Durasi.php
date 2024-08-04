<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Durasi extends Model
{
    use HasFactory;
    protected $table='durasi_magang';
    protected $guarded = [];
    protected $primaryKey = 'id';


    public function peserta()
    {
        return $this->hasMany(Peserta::class, 'durasi_magang_id');
    }   
}
