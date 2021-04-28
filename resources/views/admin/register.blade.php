@section('judul')
  Form Register
@endsection
<body class="register-page" style="min-height: 586.391px;">
<div class="register-box">
  <div class="register-logo">
   <b>SMK MAHAPUTRA</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">

         <form method="POST" action="{{ route('register') }}" id="submitForm">
         <form class="form-horizontal form-material" id='loginfrom' method="POST" action="{{ url('Form Register)}}">
          @csrf
        <div class="input-group mb-3">
        <input id="usr_name" type="text" class="form-control @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" autocomplete="usr_name" autofocus>

                                @error('usr_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
         <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="usr_email">

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
         <input id="usr_phone" value="{{ old('usr_phone') }}" type="text" class="form-control @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off">

                                @error('usr_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('usr_password')
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
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
           <div class="form-group row">
                            <div class="col-md-6">
                                <input type="hidden" name="role" value="1">
                            </div>
                        </div>
          <!-- /.col -->
          <div class="col-4">
             <button type="submit" class="btn btn-primary" id="btnSubmit">
                                    {{ __('Register') }}
             </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body>