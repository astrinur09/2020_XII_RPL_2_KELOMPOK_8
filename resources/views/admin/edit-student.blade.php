@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/saveEditStudent')}}" method="POST">
              @csrf
                <div class="card-body">
              
                <input type="hidden" name="std_usr_id" value="{{$student->std_usr_id}}">

                  <div class="form-group">
                    <label for="exampleInputName0">Nis</label>
                      
                    <input type="text" name="nis" value="{{$student->nis}}" class="form-control" id="exampleInputEmail1" placeholder="Nis" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="usr_name" value="{{$student->usr_name}}"  class="form-control" id="exampleInputEmail1" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName2">Kelas</label>
                    <input type="text" name="class" value="{{$student->class}}"  class="form-control" id="exampleInputPassword1" placeholder="Kelas" required>
                  </div>
                  <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Male" required="">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Female" required="">
                          <label class="form-check-label">Female</label>
                        </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
               
              </form>
            </div>
@endsection