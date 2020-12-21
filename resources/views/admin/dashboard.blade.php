@extends('admin.template')

@section('title', 'Dashboard')

@section('content')
{{-- barang --}}
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Products</h3>
                <a class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus-square"></i>&nbsp;&nbspInsert
                </a>
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
                            <th>Update</th>
                            <th>Delete</th>
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
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tasmania</td>
                            <td>Internet Explorer 5.3</td>
                            <td>Mac OS 12</td>
                            <td>2</td>
                            <td>D</td>
                            <td>B</td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </td>
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
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- user --}}
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User</h3>
            </div>
            <div class="box-body">
                <table id="users" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tasman</td>
                            <td>Internet Explorer 5.2</td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-external-link"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tasmania</td>
                            <td>Internet Explorer 5.3</td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-external-link"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Detail</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- trans --}}
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Transaksi</h3>
            </div>
            <div class="box-body">
                <table id="trans" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User ID</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tasman</td>
                            <td>Internet Explorer 5.2</td>
                            <td>Mac OS 8-X</td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-external-link"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tasmania</td>
                            <td>Internet Explorer 5.3</td>
                            <td>Mac OS 12</td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-external-link"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User ID</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Insert (belum jadi)</h4>
            </div>
            <div class="modal-body">
                {{-- <p>One fine body&hellip;</p> --}}
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama">
                    <br>
                    <label>Jenis</label>
                    <select class="form-control select2" multiple="multiple" id="jenis"
                              style="width: 100%;">
                        <option></option>
                        <option>Accesories</option>
                        <option>Bags</option>
                        <option>Long Sleeves</option>
                        <option>Shirts</option>
                        <option>Slides</option>
                        <option>Sneakers</option>
                    </select>
                    <br>
                    <br>
                    <label>Stok</label>
                    <input type="number" class="form-control" id="stok" >
                    <br>
                    <label>Harga</label>
                    <input type="number" class="form-control" id="harga" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
