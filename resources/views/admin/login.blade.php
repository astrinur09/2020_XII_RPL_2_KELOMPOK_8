<head>
@include ('admin.head')  
@section ('judul') 
SMK MAHAPUTRA
@endsection
</head>

<body class="login-page" style="background:white;" style="min-height: 512.391px;">
 <div class="login-logo">
    <b>SMK MAHAPUTRA</b>
  </div>
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

       <form method="POST" action="{{ route('login') }}" id="submitForm">
      @csrf
        <div class="input-group mb-3">
          <input id="usr_email" placeholder="Email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="off" autofocus>

                                    @error('usr_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
           <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
                <button type="submit" class="btn btn-primary" id="btnSubmit">
                                        {{ __('Login') }}
                                    </button>
                <a href="{{URL::to('/register-student')}}" class="btn btn-warning btn-block">Register</a>
          </div>

          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

  @include ('admin.js')

</body>