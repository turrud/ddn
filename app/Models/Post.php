<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'excerpt',

    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}