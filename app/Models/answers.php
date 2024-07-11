<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class answers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'answer',
        'score',
        'group',
        'type',
        'milk',
        'current',
        'status',
    ];

    protected $casts = [
        'created_at'=>'date',
        'answer'=>'array'
    ];

}
