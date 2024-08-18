@extends('layouts.app')


@section('content')

<div class="col-lg-12 offset-lg-2 shadow d-flex justify-content-center " style="height:100%" >
    <div class="col-lg-10 shadow d-flex justify-content-center bg-white" style="height: fit-content;margin-top:50px" >
           
        <div class=" px-2 py-2 mx-4 my-4 col-lg-4 offset-lg-4 col-md-12 col-sm-12"  >
            <h3 class="text-center" >
                <b>{{ __('Add Or Update User') }}</b>
            </h3>
            
            <form method="POST" action="{{ route('add-user',Auth::user()->id) }}">
                @csrf

                <input type="hidden" name="id" value="{{$user->id}}" >

                <div class="d-grid">
                    <label for="name" >{{ __('Name') }}</label>
                    <div >
                        <input value="{{$user->name}}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-grid">
                    <label for="email" >{{ __('Email') }}</label>
                    <div >
                        <input value="{{$user->email}}" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-grid">
                    <label for="password" >{{ __('Password') }}</label>

                    <div>
                        <input id="password" placeholder="Write password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password">
                        @if($user->id > 0)
                        <i>leave emtpy if dont want to change password</i>
                        @endif
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>

                <div class="d-grid">
                        <button class="btn btn-primary" type="submit" >
                            {{ __('Add') }}
                        </button>
                </div>
            </form>
            <br>
            <br>
            <br>
        </div>    

</div>
</div>

@endsection