<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function wishUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function wishBook()
    {
        return $this->belongsTo(Books::class, 'book_id', 'id');
    }
}
