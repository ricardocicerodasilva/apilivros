<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblivros extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomelivro',
        'generolivro',
        'anolivro',
    ];
}
