<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConceptoTributo extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the categoria that owns the ConceptoTributo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Get all of the enteTramite for the ConceptoTributo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enteTramites()
    {                               
        return $this->hasMany(EnteTramite::class);
    }
}