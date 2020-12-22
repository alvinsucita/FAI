<?php

namespace App\Http\Controllers;
use App\Model\Users;
use App\Model\Htrans;
use App\Model\Cart; //barang kok modelnya namanya cart???
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function login(){
        return view('admin.dashboard');
    }
    function home(){
        $barang = Cart::all();
        $users = Users::all();
        $trans = Htrans::all();
        return view('admin.dashboard', [
            'products' => $barang,
            'users' => $users,
            'trans' => $trans
        ]);
    }
    function allbarang(){
        return view('admin.products');
    }
    function alltrans(){
        return view('admin.transaction');
    }
    function alluser(){
        return view('admin.users');
    }
}
