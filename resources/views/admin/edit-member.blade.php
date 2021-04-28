@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/\
              ')}}" method="POST">
              @csrf
                <div class="card-body">
              
                <input type="hidden" name="mbr_id" value="{{$member->std_id}}">

                  <div class="form-group">
                    <label for="exampleInputName0">Nama</label>
                    <input type="text" name="name" value="{{$member->usr_name}}" class="form-control" id="exampleInputEmail1" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Alasan</label>
                    <input type="text" name="reason" value="{{$member->reason}}"  class="form-control" id="exampleInputEmail1" placeholder="Alasan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName2">Divisi</label>
                    <input type="text" name="division" value="{{$member->division}}"  class="form-control" id="exampleInputPassword1" placeholder="Divisi" required>
                  </div>
                
                  <div class="form-group">
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
               
              </form>
            </div>
@endsection