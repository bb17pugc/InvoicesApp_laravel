@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                           <div class="d-grid justify-content-center" >
                                    
                                    
                                    <div class="container-login-box" >
                                            <div class="text-center" >
                                                <img class="logo" height="150" width="150" src="/images/logo.png" alt="">
                                            </div>
                                            <br>
                                            <div class="text-center card-header">{{ __('Login') }}</div>


                                            <div class="my-4" >
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                               
                                            </div>

                                            <div class="my-4" >
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            </div>        
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                    <button type="submit" class="width btn btn-primary btn-jusitfied">
                                                    {{ __('Login') }}
                                                    </button>

                                            </div>  
                                    </div>
                                               
                                    
                           </div>

                                   <div class="my-4 text-center d-grid justify-content-center" >
                                                @error('email')
                                                    <span class="text-danger invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                @error('password')
                                                    <span class="text-danger invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .d-flex {
     display: block !important; 
    }
</style>
@endsection
