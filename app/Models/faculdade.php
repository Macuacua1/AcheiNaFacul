<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculdade extends Model
{
    //
    protected $fillable=['designacao','abreviatura'];
    public $timestamps=false;

    public function departamentos(){
        return $this->hasMany(departamento::class);
    }

}
