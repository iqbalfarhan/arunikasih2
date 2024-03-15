<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_id',
        'name',
        'harga',
        'keterangan',
    ];

    public function jenis(): BelongsTo
    {
        return $this->belongsTo(Jenis::class);
    }
}
