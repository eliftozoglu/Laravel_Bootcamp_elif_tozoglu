<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Products;

class HomeController extends Controller
{
    public function merhaba() {
        //$users = DB::table('users')->get();            //Veritabanından kullanıcıları çeker
        //$users = User::all();                          //Model kullanarak veri çekme
        //dd($users);
        //var_dump($users)

        $products = Product::with(['user'])->get();      // burada product ı user ilişkisiyle birlikte getir demiş olduk with ilişkili olan tabloları çekmek için kullanılır


/*         return DB::table('products')
        ->join('users','users.id','=','products.id')
            ->select('products.created_by','products.name')
            ->get();
*/

        return view('merhaba', compact('products')); //->with(['users' => $users]); // merhaba isimli view dosyasına kullanıcılar yollandı


    }

    public function createView() {
    	return view ('users.create');
    }

    public function create(Request $request){
        $data =$request ->all(); //datayı çekmek için
         $password = $request->get('password');

        DB::table('users')->insert([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
        'password'=>  Hash::make($password), //tek yönlü şifreleme yapar
        ]);

    	return 'Kayıt başarıyla tamamlandı!';
    }


    public function index (){
        return view('home');
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
