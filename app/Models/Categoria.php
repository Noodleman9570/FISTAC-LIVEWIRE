<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    /**
     * Get all of the conceptoTributo for the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conceptoTributos()
    {
        return $this->hasMany(ConceptoTributo::class);
    }
}