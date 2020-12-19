@extends('user.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Hello,{{$user->username}}
            <small>Profile</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/user"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit profile</li>
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
              <form class="form-horizontal" action="/user/edit_prof" method="POST">
                @csrf
                <input type="hidden" value="{{$user->username}}" name="username">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{$user->username}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{$user->email}}" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tgl lahir</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tgl lahir" value="{{$user->tanggallahir}}" name="tanggallahir">
                    </div>
                  </div>
                  @error('tanggallahir')
                  <div style="color:red; font-weight:bold"> {{$message}}</div>
                  @enderror
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat" value="{{$user->alamat}}" name="alamat">
                    </div>
                  </div>
                  @error('alamat')
                  <div style="color:red; font-weight:bold"> {{$message}}</div>
                  @enderror
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="No hp" value="{{$user->nohp}}" name="nohp">
                    </div>
                  </div>
                  @error('nohp')
                  <div style="color:red; font-weight:bold"> {{$message}}</div>
                  @enderror
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="pass_change"><u>Change Password</u></a>
                  <button type="submit" class="btn btn-info pull-right">Confirm</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
@endsection
