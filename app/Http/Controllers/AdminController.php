<?php

namespace App\Http\Controllers;
use App\Model\Users;
use App\Model\Category;
use App\Model\Htrans;
use App\Model\Dtrans;
use App\Model\Cart; //barang kok modelnya namanya cart???
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function login(){
        return view('admin.dashboard');
    }
    function home(){
        $barangs = Cart::all();
        $categories = Category::all();
        $users = Users::all();
        $trans = Htrans::all();
        return view('admin.dashboard', [
            'products' => $barangs,
            'categories' => $categories,
            'users' => $users,
            'trans' => $trans
        ]);
    }
    function allbarang(){
        return view('admin.products');
    }
    function detail($id){
        $user = Cart::where('product_id', '=', $id)->first();
        return $user;
    }
    public function update(Request $request)
    {
        Cart::where('product_id', '=', $request->update_id)->update([
            'name' => $request->update_name,
            'category_id' => $request->update_category,
            'harga' => $request->update_price,
            'stok' => $request->update_stock,
        ]);
        return back();
        // return back();
    }

    public function delete($id)
    {
        Cart::where('product_id', '=', $id)->delete();
        return back();
    }
    function alltrans(){
        return view('admin.transaction');
    }
    function detailtrans($id){
        $htrans = Htrans::where('htrans_id', '=', $id)->first();
        $dtrans = Dtrans::where('htrans_id', '=', $id)->get();
        $user = Users::where('id', '=', $htrans->user_id)->first();
        // $stringbuilder = $user->username;
        $stringbuilder = "";
        foreach ($dtrans as $d) {
            $barang = Cart::where('barang_id', '=', $d->barang_id)->first();
            $stringbuilder = $stringbuilder . $d->qty . 'x ' . $barang->nama . ' (Rp '.($barang->harga*$d->qty).')\n';
        }
        $barang = Users::where('id', '=', $id)->first();
        echo '<script type="text/javascript">
                alert("'.$stringbuilder.'")
                history.back();
            </script>';
    }
    function alluser(){
        return view('admin.users');
    }
    function detailuser($id){
        $user = Users::where('id', '=', $id)->first();
        echo '<script type="text/javascript">
                alert(
                "Nama: ' . $user->username .
                '\nEmail: ' . $user->email .
                '\nTTL: ' . $user->tanggallahir .
                '\nAlamat: ' . $user->alamat .
                '\nNo HP: ' . $user->nohp . '")
                history.back();
            </script>';
    }
}
