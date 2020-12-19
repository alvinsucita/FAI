@extends('user.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Hello,{{$user->username}}
            <small>Password</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/user"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Change password</li>
        </ol>
        </section>
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/user/change_p" method="POST">
                @csrf
                <input type="hidden" value="{{$user->password}}" name="p">
                <div class="box-body">
                    @error('old_p')
                    <div style="color:red; font-weight:bold"> {{$message}}<br> p is password</div>
                    @enderror
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Old password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Old password" value="" name="old_p">
                    </div>
                  </div>
                  @error('new_p')
                  <div style="color:red; font-weight:bold"> {{$message}}<br> p is password</div>
                  @enderror
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">New password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="New password" value="" name="new_p">
                    </div>
                  </div>
                    @error('cfnew_p')
                    <div style="color:red; font-weight:bold"> {{$message}}<br> p is password</div>
                    @enderror
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Confirm new password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Confirm new password" value="" name="cfnew_p">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Change Password</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
@endsection
