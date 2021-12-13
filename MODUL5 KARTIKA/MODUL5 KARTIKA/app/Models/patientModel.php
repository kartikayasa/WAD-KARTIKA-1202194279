<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientModel extends Model
{
    use HasFactory;
    protected $table = 'patient';
     protected $fillable = [
         'vaccine_id',
         'name',
         'nik',
         'alamat',
         'image_ktp',
         'no_hp',
     ];
     protected $hidden;
}
