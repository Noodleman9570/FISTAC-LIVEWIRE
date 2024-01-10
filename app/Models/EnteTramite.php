<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnteTramite extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the EnteTramite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conceptoTributo()
    {
        return $this->belongsTo(ConceptoTributo::class);
    }

    /**
     * Get all of the tramites for the EnteTramite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}
