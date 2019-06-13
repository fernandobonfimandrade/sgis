<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_escolas extends Model
{
    protected $fillable = ['id','usuario_id','escola_id','pricipal'];


    protected $table = 'usuarios_escolas';


    public function escola($usuario,$escola){
        return $this->belongsTo(escola::class,'escola_id','usuario_id');
    }
    
}
