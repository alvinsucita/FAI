@extends('admin.template')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Barang (ini sortable tp entah kenapa ga ada iconnya)</h3>
            </div>
            <div class="box-body">
                <table id="barang" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tasman</td>
                            <td>Internet Explorer 5.2</td>
                            <td>Mac OS 8-X</td>
                            <td>1</td>
                            <td>C</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>Tasmania</td>
                            <td>Internet Explorer 5.3</td>
                            <td>Mac OS 12</td>
                            <td>2</td>
                            <td>D</td>
                            <td>B</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Rating</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
