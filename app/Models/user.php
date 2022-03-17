<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public function comment()
    {
        //return $this->morphOne(Comment::class, 'commentable');
        //return $this->morphMany(Comment::class, 'commentable');
        //return $this->morphOne(Comment::class, 'commentable')->latestOfMany();
        return $this->morphOne(Comment::class, 'commentable')->oldestOfMany();

    }
}
