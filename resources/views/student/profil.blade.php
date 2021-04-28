
@extends('student.master')
@section ('content')

<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->usr_name}}</h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{Auth::user()->usr_email}}</a>
                  </li>
               </ul>

                <a href="{{URL::to('student/editprofil')}}/{{Auth::user()->usr_id}}" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>

@endsection