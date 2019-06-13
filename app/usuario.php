<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
   protected $fillable = ['id','nome','email','senha'];

   protected $dates = ['deleted_at'];

   protected $table = 'usuarios';


   public function escolas(){
      return $this->belongsToMany(escola::class,
      'usuarios_escolas',
      'usuario_id',
      'escola_id'
      );
   }



}
