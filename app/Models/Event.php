<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tanggal',
        'lokasi',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}