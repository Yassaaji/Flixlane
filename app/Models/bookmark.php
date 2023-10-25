<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class bookmark extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function film()
    {
        return $this->belongsTo(film::class, 'film_id');
    }

}
