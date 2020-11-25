 	@include('admin.master')
	@section('content')
    <!-- Main content -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>nis</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>jenis kelamin</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>tsukasa</td>
                  <td>1</td>
                  <td>Perempuan</td>
                  <td>3</td>
                  <td>gatau</td>
                  <td><a href="#" class="btn btn-primary">edit</td>
                </tr>
                <tr>
                  <td>kazuya</td>
                  <td>2 </td>
                  <td>laki laki</td>
                  <td>3</td>
                  <td>sama</td>
                  <td><a href="#" class="btn btn-primary">edit</td>
                </tr>
               
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
    <!-- /.content -->
 