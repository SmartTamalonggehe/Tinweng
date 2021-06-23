<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $table = 'aturan';
    protected $guarded = [];

    public function nilaiKriteria()
    {
        return $this->belongsTo(NilaiKriteria::class);
    }
}
