<?php

namespace App\Http\Controllers;
use App\Model\cart;
use App\Model\usermodel;
use App\Model\penginapanmodel;
use App\Model\vouchermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function logout(Request $request)
    {
        // Agar user benar-benar terlogout, hapus session yang menyimpan data user
        $request->session()->forget('auth');
        $request->session()->forget('cart');
        return redirect('/');
    }
    function home(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.home', ['user' => $user, 'count' => $cart]);
    }
    function aboutus(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.aboutus', ['user' => $user, 'count' => $cart]);
    }
    function cart(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        $coun = 0;
        for($i=1;$i<count($cart);$i++){
            $coun+=$cart[$i]["harga"];
        }
        return view('user.cart', ['user' => $user, 'cart' => $cart, 'count' => $cart, 'coun' => $coun]);
    }
    function buy_form(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        $coun = 0;
        for($i=1;$i<count($cart);$i++){
            $coun+=$cart[$i]["harga"];
        }
        return view('user.cart', ['user' => $user, 'cart' => $cart, 'count' => $cart, 'coun' => $coun]);
    }
    function history(){
        return view('user.history');
    }
    function pass_change(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.password', ['user' => $user, 'count' => $cart]);
    }
    function change_p(Request $request){
        $rules = [
            'p' => 'required',
            'old_p' => 'required | same:p',
            'new_p' => 'required',
            'cfnew_p' => 'required | same:new_p',
        ];
        $this->validate($request,$rules);
        // Ambil dan tampung input value
        $menus = usermodel::all();
        $old_p = $request->old_p;
        $new_p = $request->new_p;
        // $cfnew_p = $request->cfnew_p;
        $user = $request->session()->get('auth');
        if($old_p!=$user->password){
            return back();
        }
        foreach($menus as $curUser) {
            // user ditemukan
            if ($curUser->username == $user->username) {
                //$curUser->desc=$desc;
                $user = usermodel::find($curUser->id);
                $user->password = $new_p;
                $user->save();
                $request->session()->put('auth', $user);
            }
        }
        return redirect('/user');
    }
    function profile(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.profile', ['user' => $user, 'count' => $cart]);
    }
    function edit_prof(Request $request){
        $rules = [
            'nohp' => 'required | numeric',
            'tanggallahir' => 'required',
            'alamat' => 'required',
        ];
        $this->validate($request,$rules);
        $menus = usermodel::all();

        // Ambil dan tampung input value
        $username = $request->username;
        $email = $request->email;
        $tanggallahir = $request->tanggallahir;
        $alamat = $request->alamat;
        $nohp = $request->nohp;
        $user = $request->session()->get('auth');
        foreach($menus as $curUser) {
            // user ditemukan
            if ($curUser->username == $user->username) {
                //$curUser->desc=$desc;
                $user = usermodel::find($curUser->id);
                $user->email = $email;
                $user->tanggallahir = $tanggallahir;
                $user->alamat = $alamat;
                $user->nohp = $nohp;
                $user->save();
                $request->session()->put('auth', $user);
            }
        }
        return redirect('/user');
    }

    function cart_dummy1(Request $request){
        $user = cart::find(1);
        //dd($user);
        $temp = ["count"=>1, 1=>[
            "id"=>$user->barang_id,
            "nama"=>$user->nama,
            "jenis"=>$user->jenis,
            "harga"=>$user->harga,
            "buy"=>1,
            "stok"=>$user->stok
        ]];
        $request->session()->put('cart', $temp);
        return back();
    }
    function cart_dummy2(Request $request){
        $user1 = $request->session()->get('cart');
        $user1["count"] += 1;
        $user = cart::find(1);
        $temp = [
            "id"=>$user->barang_id,
            "nama"=>$user->nama,
            "jenis"=>$user->jenis,
            "harga"=>$user->harga,
            "buy"=>1,
            "stok"=>$user->stok
        ];
        array_push($user1, $temp);
        $request->session()->put('cart', $user1);
        return back();
    }
    function cart_dummy1plus(Request $request){
        $user = $request->session()->get('cart');
        $user[0]->stok += 1;
        return back();
    }
    function cart_erase(Request $request){
        $request->session()->put('cart', "");
        return back();
    }
}
