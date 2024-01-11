<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the comments for the Contribuyente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}