<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation;

class Product extends Model
{
   protected $fillable = [
   	'name','photo','price','created_by','updated_by','deleted_by'
   ];
   public function user(){
   	return $this->hasMany('App\User','id','created_by');

   }
}
