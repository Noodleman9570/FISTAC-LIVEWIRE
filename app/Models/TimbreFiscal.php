<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimbreFiscal extends Model
{
    use HasFactory;

    protected $table = "timbres_fiscales";

    protected $primaryKey = 'codigo';

    protected $fillable = [
        'codigo', 'cant_ut', 'tramite_id', 'status', 'denominacion_id'
    ];

    /**
     * Get the tramite that owns the TimbreFiscal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }

    /**
     * Get the unidadTributaria that owns the TimbreFiscal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function denomTimbre()
    {
        return $this->belongsTo(DenomTimbre::class);
    }
}
