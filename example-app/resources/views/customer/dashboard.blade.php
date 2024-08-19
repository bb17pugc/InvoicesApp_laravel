@extends('layouts.app')
@section('content')
    <div class=" col-lg-12 no-padding col-md-12 col-sm-12" >

    <br>
        <div  class="text-right my-4 mx-4" >
             <a style="margin-right:20px" class="btn btn-primary {{ route('upload-csv-file',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }} " href="{{ route('upload-csv-file',Auth::user()->id) }}" > <i class="fa fa-upload" ></i> Upload CSV</a>   
        </div>   
             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-user icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Files') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>{{$TotalFiles}}</b></h4>
                </div>
             </div>
             
             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-dollar icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Credit(Rs.)') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>{{$TotalCredits}}</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-dollar icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Credit This Month(Rs.)') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>{{$CreditThisMonth}}</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-file icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Customers') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>{{$TotalCustomers}}</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fas fa-calendar icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Last Credit') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>{{ \Carbon\Carbon::parse($LastCredit)->format('M d, Y')}}</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fas fa-file icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Today Files') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>{{$TodayFiles}}</b></h4>
                </div>
             </div>


    </div>
@endsection
