<?php

namespace App\Http\Controllers;
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
        return redirect('/');
    }
    function home(Request $request){
        $user = $request->session()->get('auth');
        return view('user.home', ['user' => $user]);
    }
    function aboutus(Request $request){
        $user = $request->session()->get('auth');
        return view('user.aboutus', ['user' => $user]);
    }
    function cart(Request $request){
        $user = $request->session()->get('auth');
        $cart = $request->session()->get('cart');
        return view('user.cart', ['user' => $user, 'cart' => $cart]);
    }
    function history(){
        return view('user.history');
    }
    function pass_change(Request $request){
        $user = $request->session()->get('auth');
        return view('user.password', ['user' => $user]);
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
        return view('user.profile', ['user' => $user]);
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
}
