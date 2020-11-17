@extends('home')
@section('content')
    <!-- isset ini untuk melakukan pengecekan apakah isi dari $angka ada isinya, supaya tidak error ketika isi dari $angka adalah kosong-->
    <div style="max-width: 300px; margin:auto;"><br><br>
        <form method = "POST" action="{{ url('/insertBaru2') }}">
            <input  name="namaa" type="text" placeholder="Nama Penginapan"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @csrf
            @error('namaa')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="alamat"id="email" type="text" placeholder="Alamat"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('alamat')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="link"type="text" placeholder="Link"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('link')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <input  name="harga"id="password"type="text" placeholder="Harga"style="border-radius: 6px; width:300px; height:30px;"><br><br>
            @error('harga')
            <div style="color:red; font-weight:bold"> {{$message}}</div>
            @enderror
            <button type="submit" value="APPLY FILTER" style="border-radius: 6px; width: 300px; height: 45px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;">Sign Up</button><br><br><br>
            Ini Admin
        </form>
    </div>
@endsection
