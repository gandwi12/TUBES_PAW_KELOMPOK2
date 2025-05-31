<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $fillable = [
        'user_id', 'tanggal_kunjungan', 'keluhan', 'diagnosa', 'resep_obat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
