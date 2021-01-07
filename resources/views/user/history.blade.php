@extends('user.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Hello,{{$user->username}}
            <small>History</small>
        </h1>
        </section>
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Your History</h3>
              </div>
              @if($htrans==null)
              <div class="form-group">
                <label class="col-sm-12 control-label">Your history is empty</label>
              </div>
              ____________________________________________________________________________________________________________________________________
              @else
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>History transaksi</th>
                        <th>Diterima</th>
                        <th>Detail</th>
                    </tr>
                    @for($i=0;$i<count($htrans);$i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$htrans[$i]->paid}}</td>
                            <td>
                                @if($htrans[$i]->paid=="Y")
                                <form class="form-horizontal" action="/user/dtrans_show" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$htrans[$i]->htrans_id}}">
                                    <button type="submit" class="btn btn-success pull-left">Detail</button>
                                </form>
                                @endif
                                <form class="form-horizontal" action="/user/status" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$htrans[$i]->htrans_id}}">
                                    <button type="submit" class="btn btn-success pull-left">Status</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                </table>
              </div>
              @endif
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
@endsection
