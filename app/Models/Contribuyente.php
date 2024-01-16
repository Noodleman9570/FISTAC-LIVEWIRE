<?php

namespace App\Models;

use App\Http\Resources\TramiteCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefijo','cedula','nombre1st', 'nombre2nd', 'apellido1st', 'apellido2nd', 'direccion', 'telefono'
    ];

    /**
     * Get all of the comments for the Contribuyente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Tramites()
    {
        return $this->hasMany(TramiteCollection::class);
    }
}