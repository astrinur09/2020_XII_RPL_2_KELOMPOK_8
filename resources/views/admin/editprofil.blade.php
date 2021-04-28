@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/saveEditProfile')}}" method="POST">
              @csrf
                <div class="card-body">
              
                <input type="hidden" name="id" value="{{Auth::user()->usr_id}}">

                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" name="email" value="{{Auth::user()->usr_email}}"  class="form-control" id="exampleInputEmail1" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="name" value="{{Auth::user()->usr_name}}"  class="form-control" id="exampleInputEmail1" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName3">New Password</label>
                    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="" required>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
               
              </form>
            </div>
@endsection