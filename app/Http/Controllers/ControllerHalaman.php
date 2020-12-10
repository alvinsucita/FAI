<?php

namespace App\Http\Controllers;
use App\Model\usermodel;
use App\Model\penginapanmodel;
use App\Model\vouchermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerHalaman extends Controller
{
    function prosesData(Request $request) {
        $rules = [

            'username' => 'required  | max:24',
            'noHP' => 'required | numeric',
            'tanggallahir' => 'required',
            'alamat' => 'required',
            'email' => 'required | regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required  | max:12  | confirmed'
        ];//| regex:/^(?=.*[a-z])(?=.*[A-Z]).+$/ validation harus ad huruf besar dan kecil
        $customError = [
            'required' => ':attribute harus diisi!',
            'numeric' => 'Mana ada :attribute ada hurufnya?'
        ];
        $this->validate($request,$rules,$customError);
        $nama = $request->input('username');
        $email = $request->input('email');
        $nohp = $request->input('noHP');
        $password = $request->input('password');
        $alamat = $request->input('alamat');
        $tanggallahir = $request->input('tanggallahir');
        // $data = [
        //     'nama' => $nama,
        //     'email' => $email,
        //     'nohp' => $nohp,
        //     'password' => $password
        // ];
        // DB::table('user')->insert($data);
        $data = new usermodel;
        $data->username = $nama;
        $data->password = $password;
        $data->email = $email;
        $data->tanggallahir = $tanggallahir;
        $data->alamat = $alamat;
        $data->nohp = $nohp;
        $data->save();
        echo "<script>alert('Sukses Register')</script>";
        return view('components.Register');
    }
    function prosesData2(Request $request) {
        $rules = [
            'namaa' => 'required | max:20 | regex:/^([^0-9]*)$/',
            'alamat' => 'required | max:50',
            'link' => 'required'
        ];
        $customError = [
            'required' => ':attribute harus diisi!',
            'numeric' => 'Mana ada :attribute ada hurufnya?'
        ];
        $this->validate($request,$rules,$customError);

        $nama = $request->input('namaa');
        $alamat = $request->input('alamat');
        $link = $request->input('link');
        $harga = $request->input('harga');
        // $data = [
        //     'nama_penginapan' => $nama,
        //     'alamat' => $alamat,
        //     'link' => $link,
        //     'harga' => $harga
        // ];
        // DB::table('penginapan')->insert($data);
        $data = new usermodel;
        $data->nama_penginapan = $nama;
        $data->alamat = $alamat;
        $data->link = $link;
        $data->harga = $harga;
        $data->save();
        echo "<script>alert('Sukses tambah penginapan')</script>";
        return view('components.admin');
    }
    function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = usermodel::where('username', '=', $username)->first();
        if($username == "888" && $password == "888")
        {
            return view('components.admin');
        }
        else if($user != null){
            if($user->password == $password)
            {
                $request->session()->put('username',$username);
                return view('components.profile',[
                    'username' => $request->session()->get('username'),
                ]);
            }
        }
        else
        {
            echo "<script>alert('Username atau pass ada yang salah')</script>";
        }
        return view('components.body2');
    }


    function addwish(Request $request) {
        $bool = false;
        $index = $request->input('index');
        $indexe = $index-1;
        $data = penginapanmodel::all();
        $id = $data[$indexe]->id;
        $username = $data[$indexe]->nama_penginapan;
        $alamat = $data[$indexe]->alamat;
        $link = $data[$indexe]->link;
        $harga = $data[$indexe]->harga;
        $ids = $request->session()->pull('id');
        if($ids != null)
        {
            for ($i = 0; $i < count(array_values($ids)); $i++)
            {
                if($id == $ids[$i])
                {
                    $bool = true;
                    $request->session()->put('id',$ids) ;
                    echo "<script>alert('wishlist sudah ada')</script>";
                    return view('components.detailpenginapan',[
                        'id' => $request->session()->get('id'),
                        'nama' => $request->session()->get('username'),
                        'alamat' => $request->session()->get('alamat'),
                        'link' => $request->session()->get('link'),
                        'harga' => $request->session()->get('harga')
                    ],['users'=>$data]);
                }
            }
        }
        if ($bool == false)
        {
            $request->session()->put('id',$ids) ;
            $request->session()->push('id',$id) ;
            $request->session()->push('username',$username) ;
            $request->session()->push('alamat',$alamat) ;
            $request->session()->push('link',$link) ;
            $request->session()->push('harga',$harga) ;
            //var_dump($request->session()->all());
            return view('components.detailpenginapan',[
                'id' => $request->session()->get('id'),
                'nama' => $request->session()->get('username'),
                'alamat' => $request->session()->get('alamat'),
                'link' => $request->session()->get('link'),
                'harga' => $request->session()->get('harga')
            ],['users'=>$data]);
        }
    }
    function profiluser(Request $request) {
        $users = usermodel::all();
        return view('components.profile',[
            'id' => $request->session()->get('id'),
            'nama' => $request->session()->get('username'),
            'alamat' => $request->session()->get('alamat'),
            'link' => $request->session()->get('link'),
            'harga' => $request->session()->get('harga')
        ],['users'=>$users]);
    }
    function deleteSession(Request $request) {
        $confirm = "confirm('Are you sure?')";
        if($confirm == true)
        {
            $idDelete = $request->input('idDelete');
            $id = $request->session()->pull('id');
            $nama = $request->session()->pull('username');
            $alamat = $request->session()->pull('alamat');
            $link = $request->session()->pull('link');
            $harga = $request->session()->pull('harga');
            unset($id[$idDelete]);
            unset($nama[$idDelete]);
            unset($alamat[$idDelete]);
            unset($link[$idDelete]);
            unset($harga[$idDelete]);
            $idbaru = array_values($id);
            $namabaru = array_values($nama);
            $alamatbaru = array_values($alamat);
            $linkbaru = array_values($link);
            $hargabaru = array_values($harga);
            $request->session()->put('id',$idbaru);
            $request->session()->put('username',$namabaru);
            $request->session()->put('alamat',$alamatbaru);
            $request->session()->put('link',$linkbaru);
            $request->session()->put('harga',$hargabaru);
            //var_dump($request->session()->get('username'));
            $users = usermodel::all();
            return view('components.profile',[
                'id' => $request->session()->get('id'),
                'nama' => $request->session()->get('username'),
                'alamat' => $request->session()->get('alamat'),
                'link' => $request->session()->get('link'),
                'harga' => $request->session()->get('harga')
            ],['users'=>$users]);
        }
        else
        {
            $users = usermodel::all();
            return view('components.profile',[
                'id' => $request->session()->get('id'),
                'nama' => $request->session()->get('username'),
                'alamat' => $request->session()->get('alamat'),
                'link' => $request->session()->get('link'),
                'harga' => $request->session()->get('harga')
            ],['users'=>$users]);
        }

    }
    function detail(Request $request) {
        $idDetail = $request->input('idDetail');
        $request->session()->put('detail',$idDetail);
        $users = penginapanmodel::all();
        return view('components.detail',[
            'id' => $request->session()->get('id'),
            'nama' => $request->session()->get('username'),
            'alamat' => $request->session()->get('alamat'),
            'link' => $request->session()->get('link'),
            'harga' => $request->session()->get('harga'),
            'detail' => $request->session()->get('detail')
        ],['users'=>$users]);
    }
}
