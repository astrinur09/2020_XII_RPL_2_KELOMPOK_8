@extends ('admin.master')
@section ('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Menajemen Anggota Osis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <a href="{{URL::to('admin/create-member')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>nama</th>
                      <th>kelas</th>
                      <th>divisi</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($member as $no =>$data)
                    <tr>
                      <td>{{$no+1}}</td>
                      <td>{{$data->usr_name}}</td>
                      <td>{{$data->class}}</td>
                      <td>{{$data->division}}</td>
                      <td>
                      <a href="{{URL::to('admin/member-edit')}}/{{$data->mbr_id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                      <a href="{{URL::to('admin/deleteMember')}}/{{$data->mbr_students_id}}" class="btn btn-primary"><i class="fas fa-trash"></i></a>
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