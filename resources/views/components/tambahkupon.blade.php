@extends('home')
@section('content')
    <!-- isset ini untuk melakukan pengecekan apakah isi dari $angka ada isinya, supaya tidak error ketika isi dari $angka adalah kosong-->
    <div style="max-width: 300px; margin:auto;"><br><br>
        <a href="/hi"><button type="submit" value="APPLY FILTER" style="border-radius: 6px; width: 300px; height: 45px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;">Kembali Ke Input Penginapan</button><br><br><br></a>
        <form action="/isivoucher" method="post">
            @csrf
            <input name="voucher" type="text" placeholder="Kode Voucher"style="border-radius: 6px; width:300px; height:30px;">
            <div style="max-width: 300px; margin:auto;"><br>
                Penginapan<br><br>
                @foreach ($users ?? '' as $user)
                <input type="checkbox"name="{{$user->nama_penginapan}}" value="{{$user->nama_penginapan}}">
                <label for="{{$user->nama_penginapan}}">{{$user->nama_penginapan}}</label>
                @endforeach
            </div><br>
            Potongan <input type="number" name="diskon"><br><br>
            <button type="submit" value="APPLY FILTER" style="border-radius: 6px; width: 200px; height: 25px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;">Tambah Voucher</button>
            <br><br>

        </form>
    </div>
    <div style="max-width: 300px; margin:auto;"><br><br>
        ini isi voucher
        <table border = "1">
            <tr>
            <td>Kode Voucher</td>
            <td>Diskon</td>
            </tr>
            @foreach ($ha ?? '' as $ha)
            <tr>
            <td>{{ $ha->kodevoucher }}</td>
            <td>{{ $ha->diskon }}</td>
            </tr>
            @endforeach
            </table>
    </div>
@endsection
