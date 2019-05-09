<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reunio extends Model
{
	protected $fillable = [
        'titol', 'lloc', 'durada', 'data_reunio', 'entrada_id'
    ];
    public $timestamps = false;
    public function entrada()
    {
        return $this->belongsTo(Entrada::class);
    }
}
