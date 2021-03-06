<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoHabitos extends Model
{
    protected $fillable = ['historico_id', 'habito_id'];

    public function habito() {
        return $this->belongsTo('App\Habito');
    }
}
