<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class local_trabalho extends Model
{
    //
    protected $fillable=['designacao','descricao'];
    public $timestamps=false;

    public function utente(){
        return $this->hasOne(utente::class);
    }

}
