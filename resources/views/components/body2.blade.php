@extends('home')
@section('content')
    <!-- isset ini untuk melakukan pengecekan apakah isi dari $angka ada isinya, supaya tidak error ketika isi dari $angka adalah kosong-->
    <div style="max-width: 300px; margin:auto;"><br><br>
        <form action="/ceklogin">
            @csrf
            <input name="username" type="text" placeholder="Username"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            <input name="password" type="password" placeholder="Password"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            <button type="submit" value="APPLY FILTER" style="border-radius: 6px; width: 300px; height: 45px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;">Login</button><br><br><br>
        </form>
        or
        <a href="/Register" style="color:blue"><u>do you want to Register?</u></a><br>
    </div>
@endsection
