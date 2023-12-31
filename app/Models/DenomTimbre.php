<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenomTimbre extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cant_ut', 'img', 'tipo'];
}
