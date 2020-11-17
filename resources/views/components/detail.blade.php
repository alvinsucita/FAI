@extends('home')
@section('content')
    <!-- isset ini untuk melakukan pengecekan apakah isi dari $angka ada isinya, supaya tidak error ketika isi dari $angka adalah kosong-->

    <div style="max-width: 300px; margin:auto;"><br><br>

        @isset($nama)
        <h1>Detail Penginapan</h1><br>
        Id = {{$id[$detail]}}<br>
        Nama Penginapan = {{$nama[$detail]}}<br>
        Alamat = {{$alamat[$detail]}}<br>
        Link = {{$link[$detail]}}<br>
        Harga = {{$harga[$detail]}}<br>
    @endisset
    </div><br><br>


@endsection
