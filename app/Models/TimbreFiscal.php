<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimbreFiscal extends Model
{
    use HasFactory;

    protected $table = "timbres_fiscales";

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
