@extends('user.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Hello,{{$user->username}}
            <small>Cart</small>
        </h1>
        </section>
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Your Cart</h3>
              </div>
              @if($cart=="")
              <div class="form-group">
                <label class="col-sm-12 control-label">Your shopping cart is empty</label>
              </div>
              ____________________________________________________________________________________________________________________________________
              @else
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    @for($i=1;$i<count($cart);$i++)
                        <tr>
                            <td><div class="col-md-12">
                                <div class="box box-success">
                                  <div class="box-header">
                                    <h3 class="box-title">{{$cart[$i]["nama"]}}</h3>
                                    <form class="form-horizontal" action="/user/eraseitem" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$cart[$i]["id"]}}">
                                        <button type="submit" class="btn btn-danger pull-right">X</button>
                                    </form>

                                    <!--div class="box-tools pull-right">
                                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div-->
                                    <!-- /.box-tools -->
                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                    <div class="col-sm-12"><img style="width: 70px; height: 70px;" src="{{url("/".$cart[$i]["img"])}}"></div>
                                    <div class="col-sm-2">{{$cart[$i]["jenis"]}}</div>
                                    <div class="col-sm-3">Rp {{$cart[$i]["harga"]}},-</div>
                                    <div class="col-sm-4">x {{$cart[$i]["buy"]}}</div>
                                    <div class="col-sm-3">
                                        <form class="form-horizontal" action="/user/plusitem" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$cart[$i]["id"]}}">
                                            <button type="submit" class="btn btn-success pull-right">+</button>
                                        </form>
                                        <form class="form-horizontal" action="/user/minusitem" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$cart[$i]["id"]}}">
                                            <button type="submit" class="btn btn-warning pull-right">-</button>
                                        </form>
                                    </div>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div></td>
                        </tr>
                    @endfor
                </table>
              </div>
              <div class="box-footer">
                <div class="box-tools pull-right">
                    Total: Rp {{$coun}},-
                </div><br>
                <form class="form-horizontal" action="/user/buy_item" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary pull-right">Buy</button>
                </form>
              </div>
              @endif
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
@endsection
