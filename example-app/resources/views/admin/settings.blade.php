@extends('layouts.app')


@section('content')

<div class="col-lg-12 offset-lg-2 shadow d-flex justify-content-center " style="height:100%" >
    <div class="col-lg-10 shadow d-flex justify-content-center bg-white" style="height: fit-content;margin-top:50px" >
           
        <div class=" px-2 py-2 mx-4 my-4 col-lg-4 offset-lg-4 col-md-12 col-sm-12"  >
            <h3 class="text-center" >
                <b>{{ __('Settings') }}</b>
            </h3>
            
            <form method="POST" action="{{ route('add-settings-post',Auth::user()->id) }}">
                @csrf

                <div class="d-grid">
                    <label for="comission" >{{ __('Comission') }}</label>
                    <div >
                        <input value="{{$Setting->comission}}" id="comission" type="text" class="form-control @error('name') is-invalid @enderror" name="comission" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
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