@extends('admin.template')

@section('title', 'Dashboard')

@section('content')
{{-- barang --}}
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Products</h3>
            </div>
            <div class="box-body">
                <table id="barang" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price (IDR)</th>
                            <th>Stock</th>
                            <th>Sold</th>
                            <th>Rating</th>
                            <th>Visited (not unique)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $index)
                            <tr>
                                <td id="name">{{ $index->name }}</td>
                                @foreach ($categories as $item)
                                    @if ($item->category_id == $index->category_id)
                                        <td id="category">{{ $item->name }}</td>
                                    @endif
                                @endforeach
                                <td id="price">{{ $index->harga }}</td>
                                @if ($index->stok == 0)
                                    <td id="stock" style="color:red;">{{ $index->stok }}</td>
                                @else
                                    <td id="stock">{{ $index->stok }}</td>
                                @endif
                                <td id="sold">{{ $index->sold }}</td>
                                <td id="rating">{{ $index->rating }}</td>
                                <td id="clicked">{{ $index->unique_click }}</td>
                            </tr>
                        @empty
                        {{-- kalau kosong --}}
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price (IDR)</th>
                            <th>Stock</th>
                            <th>Sold</th>
                            <th>Rating</th>
                            <th>Visited (not unique)</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index)
                            <tr>
                                <td>{{ $index->username }}</td>
                                <td>{{ $index->email }}</td>
                            </tr>
                        @empty
                        {{-- kalau kosong --}}
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
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
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
