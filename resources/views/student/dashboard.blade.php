
@extends('student.master')
@section ('content')

@foreach($candidates as $data)
  <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$data->total_votes}} Votes</h3>

                <p>{{$data->chairman_name}} & {{$data->vice_chairman_name}}</p>
              </div>
            </div>
          </div>
        </div>
         

               
         @endforeach

@endsection