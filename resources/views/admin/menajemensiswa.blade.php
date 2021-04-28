@extends('admin.master')
@section ('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Menajemen Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Nis</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($student as $no =>$data)
                    <tr>
                      <td>{{$no+1}}</td>
                      <td>{{$data->usr_name}}</td>
                      <td>{{$data->class}}</td>
                      <td>{{$data->nis}}</td>
                      <td>
                      <a href="{{URL::to('admin/detail')}}/{{$data->std_usr_id}}" class="btn btn-info">Detail</a>
                      <a href="{{URL::to('admin/student-edit')}}/{{$data->std_usr_id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="{{URL::to('admin/delete')}}/{{$data->std_id}}" class="btn btn-primary"><i class="fas fa-trash"></i></a>
                      </td>
                      @endforeach
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
            </div>
@endsection