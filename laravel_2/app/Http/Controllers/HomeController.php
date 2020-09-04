<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function createView(){
        return view ('users.create');

    }
    public function create(Request $request){
        $data =$request ->all(); //datayı çekmek için
        $password = $request->get('password');

        DB::table('users')->insert([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>  Hash::make($password), //tek yönlü şifreleme yapar
            'created_at'=> Carbon::now()
        ]);

        return 'Kayıt başarıyla tamamlandı!';
    }
    public function list(){
        $users = User::where('deleted_at', '=', null )->get(); //deleted_at i boş olanları getirir
        return view ('users.index',compact('users'));

    }
    public function updateView($id){
        $user=User::where('id', $id )->get();
        $user = $user->first();
        return view ('users.update', compact ('user'));
    }
    public function update(Request $request,$id){
        //  $data=$request->all();

        $user= User::where('id',$id)->update([
            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
            'updated_at'=>Carbon::now()


        ]);
        return 'başarıyla güncellendi';
    }
    public function delete($id) {
        //har delete ile veriyi kalıcı olarak siler TAVSİYE EDİLMEZ
        // DB::table('users')->where('id','=', $id)->delete();

        DB::table('users')->where('id','=', $id)->update([
            'deleted_at'=> Carbon::now()
        ]);

        return 'Kullanıcı kaydı silindi ' ;      //->first()->name; dersek ilk elemana ulaşabiliriz
    }
}
