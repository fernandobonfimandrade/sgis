<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escola extends Model
{
    protected $fillable = ['id','logo','website','nome','cnpj','logradouro','cidade','uf','bairro','numero','telefone','email','responsavel'];

    protected $dates = ['deleted_at'];

    protected $table = 'escolas';

    public function usuario(){
        return $this->belongsToMany(usuario::class,
        'usuarios_escolas',
        'usuario_id',
        'escola_id');
    }
        //para trazer todas
        public function gerenciaveis(){
            return $this->hasMany(gerenciaveis::class,'escola_id');
        }
        // para trazer 1 
        public function gerenciavel($id){
             return $this->hasOne(gerenciaveis::class, 'escola_id')->find($id);
        }
}
