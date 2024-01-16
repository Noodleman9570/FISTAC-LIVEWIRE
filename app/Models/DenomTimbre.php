<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenomTimbre extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cant_ut', 'img', 'tipo'];

    /**
     * Get all of the timbresFiscales for the DenomTimbre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timbresFiscales()
    {
        return $this->hasMany(TimbreFiscal::class);
    }
}
