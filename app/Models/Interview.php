<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Interview extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function jabatans():BelongsTo
    {
        return $this->hasMany(Jabatan::class,'id_jabatan','id')->withDefault('-');
    }

    public function pelamars():HasMany
    {
        return $this->hasMany(Pelamar::class,'id_pelamar','id')->withDefault('-');
    }
}
