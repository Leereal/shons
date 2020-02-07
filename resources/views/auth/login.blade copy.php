@extends('layouts.app')
@section('content')
  <div class="full-page login-page" filter-color="black" data-image="../../../assets/img/bgimage.jpg">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="content">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div class="card card-login card-hidden">
                              <div class="card-header text-center" data-background-color="blue">
                                  <h4 class="card-title">{{ __('Login') }}</h4>                                  
                              </div>
                              <p class="category text-center">
                                  Let's Be Classical
                              </p>
                              <div class="card-content">                                  
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="material-icons">email</i>
                                      </span>
                                      <div class="form-group label-floating">
                                          <label class="control-label">{{ __('E-Mail Address') }}</label>
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                      </div>
                                  </div>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="material-icons">lock_outline</i>
                                      </span>
                                      <div class="form-group label-floating">
                                          <label class="control-label">{{ __('Password') }}</label>
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                      </div>
                                  </div>
                                  <div class="input-group">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="footer text-center">
                                  <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let's go</button>
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
      </div>
      <footer class="footer">
          <div class="container">            
              <p class="copyright pull-right">
                  &copy;
                  {{date('Y')}}
                  <a href="https://leereal.me">Leereal Inc</a>, Greatness is achieved through excellence
              </p>
          </div>
      </footer>
  </div>
@endsection

