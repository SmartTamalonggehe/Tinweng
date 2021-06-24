<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPemakai extends Model
{
    use HasFactory;
    protected $table = 'nilai_pemakai';
    protected $guarded = [];

    public function pemakai()
    {
        return $this->belongsTo(Pemakai::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
