<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    //
    protected $fillable=['designacao','departamento_id'];
    public $timestamps=false;

    public function departamento(){
        return $this->belongsTo(departamento::class);
    }
    public function utentes(){
        return $this->hasMany(utente::class);
    }
}
