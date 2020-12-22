@extends('admin.template')

@section('title', 'Dashboard')

@section('content')
{{-- barang --}}
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Products</h3>
                <a class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-insert">
                    <i class="fa fa-plus-square"></i>&nbsp;&nbspInsert
                </a>
            </div>
            <div class="box-body">
                <table id="barang" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga (Rp)</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Rating</th>
                            <th>Visited (not unique)</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $index)
                            <tr>
                                <td>{{ $index->nama }}</td>
                                <td>{{ ucfirst($index->jenis) }}</td>
                                <td>{{ $index->harga }}</td>
                                @if ($index->stok == 0)
                                    <td style="color:red;">{{ $index->stok }}</td>
                                @else
                                    <td>{{ $index->stok }}</td>
                                @endif
                                <td>{{ $index->sold }}</td>
                                <td>{{ $index->rating }}</td>
                                <td>{{ $index->unique_click }}</td>
                                <td>
                                    <a href='{{ url("/admin/update") . "/$index->barang_id" }}'><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></a>
                                </td>
                                <td>
                                    <a href='{{ url("/admin/delete") . "/$index->barang_id" }}'><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                                </td>
                            </tr>
                        @empty
                        {{-- kalau kosong --}}
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga (Rp)</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Rating</th>
                            <th>Visited (not unique)</th>
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
                        @forelse ($users as $index)
                            <tr>
                                <td>{{ $index->username }}</td>
                                <td>{{ $index->email }}</td>
                                <td>
                                    <a href='{{ url("/admin/user") . "/$index->id" }}'><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                </td>
                            </tr>
                        @empty
                        {{-- kalau kosong --}}
                        @endforelse
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
                        @forelse ($trans as $index)
                            <tr>
                                <td>{{ $index->htrans_id }}</td>
                                <td>{{ $index->user_id }}</td>
                                @if ($index->paid == "Y")
                                    <td>DONE</td>
                                @else
                                    <td>WAITING</td>
                                @endif
                                <td>
                                    <a href='{{ url("/admin/trans") . "/$index->htrans_id" }}'><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                </td>
                            </tr>
                        @empty
                        {{-- kalau kosong --}}
                        @endforelse
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
{{-- modal insert --}}
<div class="modal fade" id="modal-insert">
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
                    <label>Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga" step=100>
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
