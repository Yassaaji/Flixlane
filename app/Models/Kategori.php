<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\FilmController;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    public function film():HasMany
    {
        return $this->hasMany(FilmController::class);
    }
}
