@extends('layouts.app')


@section('content')

<div class="col-lg-12 offset-lg-2 shadow d-flex justify-content-center " style="height:100%" >
    <div class="col-lg-10 shadow d-flex justify-content-center bg-white" style="height: fit-content;margin-top:50px" >
           
        <div class=" px-2 py-2 mx-4 my-4 col-lg-4 offset-lg-4 col-md-12 col-sm-12"  >
             <a class="nav-item {{ route('upload-csv-file',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }} " href="{{ route('upload-csv-file',Auth::user()->id) }}" >Upload File</a>   
            <br>
        </div>    

</div>
</div>

@endsection