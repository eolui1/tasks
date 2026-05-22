<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'pages',
        'price'
    ];
}