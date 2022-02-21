<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'author',
    //     'publishing_year',
    //     'price',
    //     'title',
    //     'description',
    // ];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
