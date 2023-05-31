<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class Pelamar extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nama_lengkap',
    //     'jabatan'
    //   ];
    protected $guarded = [$id]; 
    protected $date =['created_at'];
    public function jabatan()
    {
        // return $this->belongsTo("App\Models\Kategori");
        return $this->belongsTo(Jabatan::class, 'kode_jabatan');
    }
}
