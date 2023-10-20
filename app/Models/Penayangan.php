<?php

namespace App\Models;

use App\Http\Controllers\FilmController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penayangan extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    public function film():HasMany
    {
        return $this->hasMany(FilmController::class);
    }
}
