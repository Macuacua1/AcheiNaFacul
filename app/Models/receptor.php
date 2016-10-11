<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class receptor extends Model
{
    //
    protected $fillable=['data_levantamento','utente_id'];
    public $timestamps=false;

    public function utente(){
        return $this->belongsTo(utente::class);
    }
    public function artigo(){
        return $this->hasMany(artigo::class);
    }
}
