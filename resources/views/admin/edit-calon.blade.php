@extends('admin.master')

@section('content')
  
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Calon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{URL::to('admin/updateCalon')}}" method="POST">
              @csrf
               <div class="col-sm-12">
                      <!-- select -->
                    <input type="hidden" name="cdt_id" value="{{$Candidate->cdt_id}}"> 
            
                  <div class="form-group">
                    <label for="exampleInputName3">Visi</label>
                    <input type="text" name="visi" value="{{$Candidate->cdt_visi}}" class="form-control" id="exampleInputPassword1" placeholder="Masukkan visi anda" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName3">Misi</label>
                    <input type="text" name="misi" class="form-control" value="{{$Candidate->cdt_misi}}" id="exampleInputPassword1" placeholder="Masukkan misi anda" required
                    >
                  </div>
                </div>

                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan"></button>
                </div>
              </form>
            </div>

@endsection