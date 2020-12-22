@extends('admin.template')

@section('title', 'Users')

@section('content')
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
@endsection
