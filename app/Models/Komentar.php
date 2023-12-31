<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;
    protected $guarded = [
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Film(){
        return $this->belongsTo(Post::class,'film_id');
    }

    public function reply(int $id, int $film){
        return Komentar::where('film_id', $film)->where('parent_id',$id)->get();
    }

}
