@extends('admin.master')

@section('content')
	
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/saveMember')}}" method="POST">
              @csrf
                <div class="card-body">

                  <div class="col-sm-12">
                      <!-- select -->
                     
                     <div class="form-group">
                        <label>Pilih Siswa</label>
                        <select class="form-control" name="name">
                        <option>--Pilihan--</option>

                        @foreach($students as $data)
                        @if($data->status == 0)
                        <option value="{{$data->std_id}}">{{$data->usr_name}}</option>
                        @endif
                        @endforeach
                        </select>
                      </div>
                       <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="Division">
                          <option>--Pilihan--</option>
                          <option value="Sekretaris">Sekretaris</option>
                          <option value="Bendahara">Bendahara</option>
                          <option value="Anggota">Anggota</option>
                        </select>
                      </div>

                   <div class="form-group">
                    <label for="exampleInputName1">Alasan</label>
                    <input type="text" name="reason" class="form-control" id="exampleInputEmail1" placeholder="Alasan" required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
              </form>
            </div>

@endsection