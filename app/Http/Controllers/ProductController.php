<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productCreateView() {
        return view ('product.create');

    }
    public function productCreate(Request $request) {

        $name = $request->get('name');
        $price =  $request->get('price');
        $filePhotoUrl = $request->file('photo');
        $user = User::find(1);

        if(isset($filePhotoUrl)){  //photo var mı yok mu kontrol
            $productPhotoName = uniqid('product_'). '.' .$filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName); //şu isimli dosyayı verdiğimiz yere taşı
        }

        Product::create([
            'name'=>$name,
        'price'=>$price,
            'photo'=>$productPhotoName,
            'is_approve' => false,
            'created_by' => $user->id,
            'updated_by' =>  $user->id,

        ]);
        return back();

    }

    public function indexProduct(){
        $products = Product::with(['user'])->where('deleted_at', '=', null )->get();
        return view ('users.productlist',compact('products'));
    }
}
