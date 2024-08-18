@extends('layouts.app')

@section('content')
<div class="col-lg-12 d-flex-with-center col-md-12 col-sm-12">
    
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card-header-title">{{ __('Register') }}</div>
        <hr>
        <div class="card-grey">
            

            <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="d-grid">
                            <label for="name" class="">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-grid">
                            <label for="email" class="">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-grid">
                            <label for="password" class="">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-grid">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                        <div class="d-grid" >
                            <label for="admin-password" class="">{{ __('Admin Password') }}</label>

                            <div class="">
                                <input id="admin-password" type="password" class="form-control" name="adminPassword" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="my-4" >
                            <div>
                                <button type="submit" class="width-100 btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center my-4" >
                        @if (Route::has('register'))
                            
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Already have an account? Sign in here') }}</a>
                            
                        @endif
                    </div>

                </div>
            </div>
        </div>
    
</div>
@endsection
