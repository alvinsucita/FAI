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
    public function login(){
        return view('admin.dashboard');
    }
    public function home(){
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
    public function allbarang(){
        $barangs = Cart::all();
        $categories = Category::all();
        return view('admin.products', [
            'products' => $barangs,
            'categories' => $categories
        ]);
    }
    public function detail($id){
        $user = Cart::where('product_id', '=', $id)->first();
        return $user;
    }
    public function insert(Request $request)
    {
        $newuser = new Cart();
        $newuser->name = $request->name;
        $newuser->category_id = $request->category;
        $newuser->harga = $request->price;
        $newuser->stok = $request->stock;
        $newuser->sold = 0;
        $newuser->rating = 5;
        $newuser->unique_click = 0;
        $file = $request->file('file');
        $newuser->image = $file->getClientOriginalName(); //ini upload file beneran apa pick file di public?
        $newuser->save();
        return back();
        // return back();
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

    public function alltrans(){
        $trans = Htrans::all();
        $users = Users::all();
        return view('admin.transaction', [
            'trans' => $trans,
            'users' => $users
        ]);
    }
    public function detailtrans($id){
        $htrans = Htrans::where('htrans_id', '=', $id)->first();
        $dtrans = Dtrans::where('htrans_id', '=', $id)->get();
        $user = Users::where('id', '=', $htrans->user_id)->first();
        $stringbuilder = "Untuk ".$user->username.": ";
        foreach ($dtrans as $d) {
            $barang = Cart::where('product_id', '=', $d->barang_id)->first();
            $stringbuilder = $stringbuilder . $d->qty . "x " . $barang->name . " (Rp ".($barang->harga*$d->qty).");";
        }
        echo '<script type="text/javascript">
                alert("'.$stringbuilder.'");
                history.back();
            </script>';
    }

    public function alluser(){
        $users = Users::all();
        return view('admin.users', [
            'users' => $users
        ]);
    }
    public function detailuser($id){
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
