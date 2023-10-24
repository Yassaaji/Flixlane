<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory;
    protected $guarded=[

    ];

    public function kategori():BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Film()
    {
        return $this->hasMany(Film::class);
    }

    public function komentar()
    {
        return $this->belongsTo(Komentar::class);
    }
}
