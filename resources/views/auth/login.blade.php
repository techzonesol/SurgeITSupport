@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col m8">
            <div class="card">
                
                <div class="row">
                    <div class="col s12 l6">
                        <h4 class="align_center">{{ __('Login Here') }}</h4>
                        <img src="http://www.surgeitsupport.com/wp-content/uploads/2018/04/SurgetIT-logo-300.jpg" style="margin: auto; display: block; height: 50%;" />
                    </div>
                
                    <form class="col s6" method="post">
                        @csrf
                        <div class="col m12">
                          <div class="input-field col s12">
                              <label for="user_username">{{ __('Username') }}</label>
                              <input  id="user_username" name="user_username" type="text" class="validate"  required autofocus>
                              @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_username') }}</strong>
                                    </span>
                                @endif
                          </div>
                          <div class="input-field col s12">
                              <label for="user_email">{{ __('Password') }}</label>
                              <input id="user_password" name="user_password" type="password" class="validate" required>
                              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_password') }}</strong>
                                    </span>
                                @endif
                          </div>
                          <div class="input-field col s12">
                            <button class="btn waves-effect waves-light align_center" type="submit" name="action">Login
                              <i class="material-icons right">send</i>
                            </button>
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
</div>
@endsection
