<?php

namespace App\Http\Controllers;
use App\Model\usermodel;
use App\Model\penginapanmodel;
use App\Model\vouchermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function home(){
        return view('admin.dashboard');
    }
    function login(){
        return view('admin.dashboard');
    }
}