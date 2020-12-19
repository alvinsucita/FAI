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
                Your shopping cart is empty
              @else
                Put your code here
              @endif
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
@endsection
