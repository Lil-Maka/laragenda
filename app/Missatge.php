<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missatge extends Model
{
	protected $fillable = [
        'titol', 'prioritat', 'entrada_id'
    ];
    public $timestamps = false;
    public function entrada()
    {
        return $this->belongsTo(Entrada::class);
    }
}
