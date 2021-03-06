<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
