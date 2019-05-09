<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trucada extends Model
{
	protected $fillable = [
        'numero', 'tipus', 'dispositiu', 'lloc_trucada', 'entrada_id'
    ];
    public $timestamps = false;
    public function entrada()
    {
        return $this->belongsTo(Entrada::class);
    }
}
