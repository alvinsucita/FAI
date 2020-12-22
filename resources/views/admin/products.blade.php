@extends('admin.template')

@section('title', 'Products')

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
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price (IDR)</th>
                            <th>Stock</th>
                            <th>Sold</th>
                            <th>Rating</th>
                            <th>Visited (not unique)</th>
                            <th>Update</th>
                            <th>Delete</th>
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
                                <td>
                                    {{-- <a href='{{ url("/admin/barang/update") . "/$index->product_id" }}'><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></a> --}}
                                    <a data-toggle="modal" data-target="#modal-update" data-barang-id="{{$index->product_id}}"><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#modal-delete" data-barang-id="{{$index->product_id}}"><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                                </td>
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
                            <th>Update</th>
                            <th>Delete</th>
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
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                    <label>Category</label>
                    <select class="form-control select2" multiple="multiple" id="category" name="category"
                              style="width: 100%;">
                        <option></option>
                        <option value=1>T-Shirts</option>
                        <option value=2>Accesories</option>
                        <option value=3>Bags</option>
                        <option value=4>Sneakers</option>
                        <option value=5>Slides</option>
                        <option value=6>Long Sleeves</option>
                    </select>
                    <br>
                    <br>
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <br>
                    <label>Price (IDR)</label>
                    <input type="number" class="form-control" id="price" name="price" step=100 min=0>
                    <br>
                    <label>Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock">
                    <br>
                    <label>File</label>
                    <input type="file" name="file">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="id" formaction="{{ url("/admin/barang/insert") }}">Insert</button></a>
            </div>
        </form>
        </div>
    </div>
</div>
{{-- modal update --}}
<div class="modal fade" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Update (belum jadi)</h4>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        <form method="post">
                            @csrf
                        <label>Product ID</label>
                        <input type="text" class="form-control" name="update_id" id="update_id">
                        <br>
                        <label>Category</label>
                        <select class="form-control select2" multiple="multiple" name="update_category" id="update_category"
                                  style="width: 100%;">
                            <option></option>
                            <option value=1>T-Shirts</option>
                            <option value=2>Accesories</option>
                            <option value=3>Bags</option>
                            <option value=4>Sneakers</option>
                            <option value=5>Slides</option>
                            <option value=6>Long Sleeves</option>
                        </select>
                        <br>
                        <br>
                        <label>Name</label>
                        <input type="text" class="form-control" name="update_name" id="update_name">
                        <br>
                        <label>Price (IDR)</label>
                        <input type="number" class="form-control" name="update_price" id="update_price" step=100 min=0>
                        <br>
                        <label>Stock</label>
                        <input type="number" class="form-control" name="update_stock" id="update_stock">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="id" formaction="{{ url("/admin/barang/update") . "/$index->product_id" }}">Update</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- modal delete --}}
<div class="modal modal-danger fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Delete </h4>
                <h4 class="balue"></h4>
            </div>
            <div class="modal-body">
                <p>Are you sure?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                <a href='{{ url("/admin/barang/delete") . "/$index->product_id" }}' id="id"><button type="button" class="btn btn-primary">Yes</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
