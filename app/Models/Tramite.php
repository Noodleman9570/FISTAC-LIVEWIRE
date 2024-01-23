<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion', 
        'contribuyente_id',
        'ente_tramite_id'
    ];

    /**
     * Get the user that owns the Tramite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }

    /**
     * Get the enteTramite that owns the Tramite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enteTramite()
    {
        return $this->belongsTo(EnteTramite::class);
    }

    /**
     * Get all of the timbreFiscal for the Tramite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timbresFiscales()
    {
        return $this->hasMany(TimbreFiscal::class);
    }

}
