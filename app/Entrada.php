<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = [
        'descripcio', 'rep_id', 'envia_id'
    ];
    public function reunios()
    {
        return $this->hasMany(Reunio::class);
    }
    public function trucadas()
    {
        return $this->hasMany(Trucada::class);
    }
    public function missatges()
    {
        return $this->hasMany(Missatge::class);
    }
}
