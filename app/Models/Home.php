<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'text',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}