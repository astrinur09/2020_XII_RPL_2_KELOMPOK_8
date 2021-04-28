@extends('admin.master')

@section('content')
	
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/saveStudent')}}" method="POST">
              @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputName0">Nis</label>
                    <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Nis" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="student_name" class="form-control" id="exampleInputEmail1" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName2">Kelas</label>
                    <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="Kelas" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName3">Jurusan</label>
                    <input type="text" name="major" class="form-control" id="exampleInputPassword1" placeholder="Jurusan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName3">Gender</label>
                    <input type="text" name="gender" class="form-control" id="exampleInputPassword1" placeholder="gender" required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
              </form>
            </div>

@endsection