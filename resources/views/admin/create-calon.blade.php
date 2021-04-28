@extends('admin.master')

@section('content')
	
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Calon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/saveCalon')}}" method="POST">
              @csrf
               <div class="col-sm-12">
                      <!-- select -->
                     
                     <div class="form-group">
                        <label>Pilih Ketua</label>
                        <select class="form-control" name="chairman" required>
                        <option>--Pilihan--</option>
                        @foreach($students as $data)
                         @if($data->status == 0)
                        <option value="{{$data->std_id}}">{{$data->usr_name}}</option>
                        @endif
                        @endforeach
                        </select>
                      </div>
                       <div class="form-group">
                        <label>Pilih Wakil Ketua</label>
                        <select class="form-control" name="vice_chairman" required>
                          <option>--Pilihan--</option>
                           @foreach($students as $data)
                            @if($data->status == 0)
                        <option value="{{$data->std_id}}">{{$data->usr_name}}</option>
                          @endif
                        @endforeach
                        </select>
                      </div>
            
                  <div class="form-group">
                    <label for="exampleInputName3">Visi</label>
                    <input type="text" name="visi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan visi anda" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName3">Misi</label>
                    <input type="text" name="misi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan misi anda" required
                    >
                  </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
              </form>
            </div>

@endsection