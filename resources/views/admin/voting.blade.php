@extends('admin.master')
@section ('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Form voting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Calon Ketua Osis</th>
                      <th>Calon Wakil Osis</th>
                      <th>visi</th>
                      <th>misi</th>
                      <th>Jumlah</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($candidates as $no =>$data)
                    <tr>
                      <td>{{$no+1}}</td>
                      <td>{{$data->chairman_name}}</td>
                      <td>{{$data->vice_chairman_name}}</td>
                      <td>{{$data->cdt_visi}}</td>
                      <td>{{$data->cdt_misi}}</td>
                      <td>{{$data->total_votes}}</td>
                     
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