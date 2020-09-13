<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation;

class Product extends Model
{
   protected $fillable = [
   	'name','photo','price','created_by','updated_by','deleted_by'
   ];
<<<<<<< HEAD
   public function user(){
   	return $this->hasMany('App\User','id','created_by');

=======
   public function user(){                                                            //productın içine neden user yazdık çünkü product user la bağlantılı ve ben bu bağlantıda hangi product hangi userın görmek istiyorum
   	return $this->hasMany('App\User','id','created_by');       //bu user fonk. çalıştrırsam created_by ı gidip user tablosundan çeker sadece product sayeside userdaki o ürünü kimin eklediğini bulurum
                                                                                      // bu fonk related dediği yer use tablosuyla ilişkili olduğunu aslında tuttugum şeyin userdaki id  olduğunu ama bendeki karşılık gelen alan da created_by oldugunu yazdım
>>>>>>> 4e131ad9bad936e8778484dcdf76597a11ba74b4
   }
}
