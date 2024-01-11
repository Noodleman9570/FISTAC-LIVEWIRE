<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    /**
     * Get all of the permiso for the Modulo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permisos()
    {
        return $this->hasMany(Permiso::class);
    }

    /**
     * Get all of the bitacoras for the Modulo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class);
    }
}
