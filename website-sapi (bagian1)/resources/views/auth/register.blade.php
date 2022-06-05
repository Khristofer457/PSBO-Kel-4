
<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('login-form/css/style.css')}}">

</head>
              
@extends('layouts.app')
@section('content')
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-2">
                    <h2 class="heading-section">Mulai Registrasi Akun!</h2>
                </div>
            </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 text-dark">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('Nama Lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 text-dark">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 text-dark">
                            <label for="jenis_pekerjaan" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Pekerjaan') }}</label>

                            <div class="col-md-8">
                                <input id="jenis_pekerjaan" type="jenis_pekerjaan" class="form-control @error('password') is-invalid @enderror" name="jenis_pekerjaan" required autocomplete="jenis_pekerjaan">

                                @error('jenis_pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 text-dark">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-end">{{ __('No HP') }}</label>

                            <div class="col-md-8">
                                <input id="no_hp" type="no_hp" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" required autocomplete="no_hp">

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 text-dark">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3 text-dark">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row text-right">
                            <div class="col-md-8 offset-md-4 mt-2 mb-2">
                                <button type="submit" class="btn btn-primary rounded col-md-4 col-form-label text-md-end">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<small class="d-block text-center mt-4"> <a href="{{ route('login') }}">Kembali ke Halaman Login!</a></small>
@endsection

                
            </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('login-form/js/jquery.min.js')}}"></script>
  <script src="{{asset('login-form/js/popper.js')}}"></script>
  <script src="{{asset('login-form/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('login-form/js/main.js')}}"></script>

    </body>
</html>

