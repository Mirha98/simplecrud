<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;
    protected $table = 'motos';
    protected $fillable = [
        'name',
        'team',
        'country',
    ];
}
