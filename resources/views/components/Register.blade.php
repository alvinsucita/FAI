@extends('home')
@section('content')
    <!-- isset ini untuk melakukan pengecekan apakah isi dari $angka ada isinya, supaya tidak error ketika isi dari $angka adalah kosong-->
    <div style="max-width: 300px; margin:auto;"><br><br>
        <form method = "POST" action="{{ url('/insertBaru') }}">
            <img src="adminlte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
            <input  name="username" type="text" placeholder="Username"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @csrf
            @error('username')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="password"id="password"type="password" placeholder="Password"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('password')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input name="password_confirmation" id="confirmpassword"type="password" placeholder="Confirm Password"style="border-radius: 6px; height:30px; width:300px;"><br><br>
            @error('password')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="email"id="email" type="text" placeholder="Email"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('email')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="tanggallahir"id="email" type="text" placeholder="Tanggal Lahir"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('tanggallahir')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="alamat"id="email" type="text" placeholder="Alamat"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('alamat')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="noHP"type="number" placeholder="No Hp"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('noHP')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <button type="submit" value="APPLY FILTER" style="border-radius: 6px; width: 300px; height: 45px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;">Sign Up</button><br><br><br>
        </form>
    </div>
@endsection
