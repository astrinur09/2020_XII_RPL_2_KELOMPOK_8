@extends('admin.master')
@section ('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Menajemen Calon</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <a href="{{URL::to('admin/create-calon')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama calon ketua</th>
                      <th>Nama calon wakil</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($candidate as $no =>$data)
                    @if($data->cdt_is_active == 0)
                    <tr>
                      <td>{{$num++}}</td>
                      <td>{{$data->chairman_name}}</td>
                      <td>{{$data->vice_chairman_name}}</td>
                      <td>{{$data->cdt_visi}}</td>
                      <td>{{$data->cdt_misi}}</td>
                      <td>
                      <a href="{{URL::to('admin/calon-edit')}}/{{$data->cdt_id}}"   class="fas fa-edit"></a>
                      <a href="{{URL::to('admin/deleteCalon')}}/{{$data->cdt_id}}"  class="fas fa-trash"></a>
                      <a href="{{URL::to('admin/activation')}}/{{$data->cdt_id}}"   class="fas fa-check"></a>
                    @endif

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