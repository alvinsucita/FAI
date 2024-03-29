<?php

namespace App\Http\Controllers;
use App\Model\cart;
use App\Model\usermodel;
use App\Model\Category;
use App\Model\Dtrans;
use App\Model\Htrans;
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
        return view('user.home', ['user' => $user, 'cart' => $cart]);
    }
    function aboutus(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.aboutus', ['user' => $user, 'cart' => $cart]);
    }
    function cart(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        if($cart==""){
            $coun = 0;
        }
        else{
            $coun = 0;
            for($i=1;$i<count($cart);$i++){
                $coun+=$cart[$i]["harga"]*$cart[$i]["buy"];
            }
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
    function history(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        $htrans = Htrans::where('user_id', '=', $user->id)->get();
        return view('user.history', ['user' => $user, 'cart' => $cart, 'htrans' => $htrans]);
    }
    function status(Request $request){
        $id = $request->id;
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        $dtrans = Dtrans::where('htrans_id', '=', $id)->get();
        $barang = cart::all();
        return view('user.status', ['user' => $user, 'cart' => $cart, 'dtrans' => $dtrans, 'barang' => $barang]);
    }
    function diterima(Request $request){
        $id = $request->id;
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        $htrans = Htrans::find($id);
        $htrans->paid="Y";
        $htrans->save();
        return redirect('/user');
    }
    function rating(Request $request){
        $id = $request->id;
        $dtrans = Dtrans::find($id);
        $dtrans->rating=$request->rat;
        $dtrans->save();
        $cart = cart::find($dtrans->barang_id);
        $cart1 = Dtrans::where('barang_id', '=', $dtrans->barang_id)->get();
        $count=0;
        $ctr=0;
        for($i=0;$i<count($cart1);$i++){
            if($cart1[$i]->rating>-1){
                $count += $cart1[$i]->rating;
                $ctr++;
            }
        }
        $count=$count/$ctr;
        $cart->rating=$count;
        $cart->save();
        return redirect('/user/history');
    }
    function historydetail(Request $request){
        $id = $request->id;
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        $dtrans = Dtrans::where('htrans_id', '=', $id)->get();
        $barang = cart::all();
        return view('user.history_detail', ['user' => $user, 'cart' => $cart, 'dtrans' => $dtrans, 'barang' => $barang]);
    }
    function pass_change(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.password', ['user' => $user, 'cart' => $cart]);
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
        return view('user.profile', ['user' => $user, 'cart' => $cart]);
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
    function plusitem(Request $request){
        $id = $request->id;
        $user = $request->session()->get('cart');
        for($i=1;$i<count($user);$i++){
            if($user[$i]['id']==$id){
                $user[$i]["buy"]+=1;
                if($user[$i]["buy"]==$user[$i]["stok"]+1){
                    $user[$i]["buy"]-=1;
                }
            }
        }
        $request->session()->put('cart', $user);
        return back();
    }
    function minusitem(Request $request){
        $id = $request->id;
        $user = $request->session()->get('cart');
        for($i=1;$i<count($user);$i++){
            if($user[$i]['id']==$id){
                $user[$i]["buy"]-=1;
                if($user[$i]["buy"]==0){
                    $user[$i]["buy"]+=1;
                }
            }
        }
        $request->session()->put('cart', $user);
        return back();
    }
    function eraseitem(Request $request){
        $id = $request->id;
        $user = $request->session()->get('cart');
        $user["count"] -= 1;
        $tru=false;
        for($i=1;$i<count($user);$i++){
            if($user[$i]['id']==$id && $i+1<count($user) && $tru==false){
                $user[$i]=$user[$i+1];
                $tru=true;
            }
            else if($tru==true && $i<count($user)-1){
                $user[$i]=$user[$i+1];
            }
            else if($tru==true){
                unset($user[$i]);
            }
        }
        $request->session()->put('cart', $user);
        return back();
    }
    function buy_item(Request $request){
        $user = $request->session()->get('cart');
        $user1 = $request->session()->get('auth');
        $data = new Htrans();
        $data->user_id = $user1->id;
        $data->paid = 'N';
        $data->save();
        // dd($data->htrans_id);
        for($i=1;$i<count($user);$i++){
            $data1 = new Dtrans();
            $data1->htrans_id = $data->htrans_id;
            $data1->barang_id = $user[$i]["id"];
            $data1->qty = $user[$i]["buy"];
            $data1->rating = -1;
            $data1->save();
            $user2 = cart::find($user[$i]["id"]);
            $user2->stok -= $user[$i]["buy"];
            $user2->sold += $user[$i]["buy"];
            $user2->save();
        }
        $request->session()->put('cart', "");
        return back();
    }

    function cart_dummy1(Request $request){
        $user = cart::find(1);
        //dd($user);
        $user2 = Category::find($user->category_id);
        $temp = ["count"=>1, 1=>[
            "id"=>$user->product_id,
            "nama"=>$user->name,
            "jenis"=>$user2->name,
            "harga"=>$user->harga,
            "buy"=>87,
            "stok"=>$user->stok,
            "img"=>$user->image
        ]];
        $request->session()->put('cart', $temp);
        return back();
    }
    function cart_dummy2(Request $request){
        $user1 = $request->session()->get('cart');
        $user1["count"] += 1;
        $user = cart::find(4);
        $user2 = cart::find($user->category_id);
        $temp = [
            "id"=>$user->product_id,
            "nama"=>$user->name,
            "jenis"=>$user2->name,
            "harga"=>$user->harga,
            "buy"=>1,
            "stok"=>$user->stok,
            "img"=>$user->image
        ];
        array_push($user1, $temp);
        $request->session()->put('cart', $user1);
        return back();
    }
    function cart_dummy3(Request $request){
        $user1 = $request->session()->get('cart');
        $user1["count"] += 1;
        $user = cart::find(4);
        $user2 = cart::find($user->category_id);
        $temp = [
            "id"=>$user->product_id,
            "nama"=>$user->name,
            "jenis"=>$user2->name,
            "harga"=>$user->harga,
            "buy"=>1,
            "stok"=>$user->stok,
            "img"=>$user->image
        ];
        array_push($user1, $temp);
        $request->session()->put('cart', $user1);
        return back();
    }
    function cart_dummy1plus(Request $request){
        $user = $request->session()->get('cart');
        $user[0]->buy += 1;
        return back();
    }
    function cart_dummy1minus(Request $request){
        $user = $request->session()->get('cart');
        $user[0]->buy -= 1;
        return back();
    }
    function cart_erase(Request $request){
        $request->session()->put('cart', "");
        return back();
    }
    function cart_erasespecific2(Request $request){
        $user1 = $request->session()->get('cart');
        $user1["count"] -= 1;
        $id_delete=2;
        $tru=false;
        for($i=1;$i<count($user1);$i++){
            if($user1[$i]['id']==$id_delete && $i+1<count($user1) && $tru==false){
                $user1[$i]=$user1[$i+1];
                $tru=true;
            }
            else if($tru==true && $i<count($user1)-1){
                $user1[$i]=$user1[$i+1];
            }
            else if($tru==true){
                $user1[$i]=null;
            }
        }
        $request->session()->put('cart', $user1);
        return back();
    }
}
