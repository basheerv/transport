@extends('layouts.app')

@section('content')

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 border p-2 mt-5">
                                 <p class="text-center"><b>Vehicle Login</b></p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group has-feedback">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group has-feedback">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                 </div> 
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Login') }}
                                </button>
                                    <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> 
                </div>
              </div>
          </div>
                      
                   
                    
        
      
@endsection
