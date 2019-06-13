<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gerenciaveis extends Model
{
    protected $fillable = ['id','quantidade','custo','data','usuario_id','escola_id','tipo'];

    protected $dates = ['deleted_at'];

    protected $table = 'gerenciaveis';

    public function escola(){
        return $this->belongsTo(escola::class,'id');
    }
}
