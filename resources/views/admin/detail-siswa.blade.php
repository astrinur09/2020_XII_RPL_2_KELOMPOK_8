
@extends('admin.master')
@section ('content')

<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  
                </div>

                <h3 class="profile-username text-center">{{$user->usr_name}}</h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$user->usr_email}}</a>
                  </li>
               </ul>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nis</b> <a class="float-right">{{$user->nis}}</a>
                  </li>
               </ul>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Kelas</b> <a class="float-right">{{$user->class}}</a>
                  </li>
               </ul>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Gender</b> <a class="float-right">{{$user->gender}}</a>
                  </li>
               </ul>

              </div>
              <!-- /.card-body -->
            </div>

@endsection