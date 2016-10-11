<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class artigo extends Model
{
    //
    protected $fillable=['titulo','data','local','tipo','designacao','descricao','foto',
                        'descricao_local','user_id','categoria_id','receptor_id'];
    public $timestamps=false;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function receptor(){
        return $this->belongsTo(receptor::class);
    }

    public function comentario(){
        return $this->hasMany(comentario::class);
    }
    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function estados()
    {
        return $this->belongsToMany(estado::class);
    }


}
