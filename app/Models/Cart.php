<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function cartUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function cartBook()
    {
        return $this->belongsTo(Books::class, 'book_id', 'id');
    }
}
