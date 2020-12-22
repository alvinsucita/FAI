@extends('admin.template')

@section('title', 'Transactions')

@section('content')
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
@endsection
