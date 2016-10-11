<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //
    protected $fillable=['designacao','abreviatura','faculdade_id'];
    public $timestamps=false;

    public function faculdade(){
        return $this->belongsTo(faculdade::class);
    }
    public function cursos(){
        return $this->hasMany(curso::class);
    }

}
