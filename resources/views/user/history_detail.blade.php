@extends('user.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Hello,{{$user->username}}
            <small>Detail History</small>
        </h1>
        </section>
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Detail</h3>
              </div>
              @if($dtrans==null)
              <div class="form-group">
                <label class="col-sm-12 control-label">Your detail is empty</label>
              </div>
              ____________________________________________________________________________________________________________________________________
              @else
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Detail transaksi</th>
                        <th>Item</th>
                        <th>Quantity</th>
                    </tr>
                    @for($i=0;$i<count($dtrans);$i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>
                                @for($j=0;$j<count($barang);$j++)
                                    @if($barang[$j]->product_id==$dtrans[$i]->barang_id)
                                    {{$barang[$j]->name}}
                                    @endif
                                @endfor
                            </td>
                            <td>
                                {{$dtrans[$i]->qty}}
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
