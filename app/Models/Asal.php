<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asal extends Model
{
    use HasFactory;
    protected $table='asal_instansi';
    protected $guarded = [];
    protected $primaryKey = 'id';
}
