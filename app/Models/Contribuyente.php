<?php

namespace App\Models;

use App\Http\Resources\TramiteCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefijo','cedula','nombre','apellido','direccion','telefono'
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