<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelamar;

class Jabatan extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $date =['created_at'];
    public function pelamar()
    {
        return $this->hasMany(Pelamar::class, 'nomor_ktp');
    }
}
