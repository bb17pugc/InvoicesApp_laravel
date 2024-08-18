@extends('layouts.app')

@section('content')
    <div class=" col-lg-12 no-padding col-md-12 col-sm-12" >

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-user icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Users ') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>0.00</b></h4>
                </div>
             </div>
             
             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-dollar icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Balance') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>0.00</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-dollar icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Balance This Month') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>0.00</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fa fa-file icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Files') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>0.00</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fas fa-user-check icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Total Admins') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>0.00</b></h4>
                </div>
             </div>

             <div class="col-lg-3 bg-white item-statistics col-md-12 col-sm-12" >
                <div class="label-statistics d-flex-with-center justify-content-start" >
                    <i class="fas fa-file icon-statistics fa-2x" ></i>
                    <label class="mx-4" style="font-size: 15px;" for="">{{ __('Today Files') }}</label>
                </div>
                <div>
                    <h4 class="text-right font-50" ><b>0.00</b></h4>
                </div>
             </div>


    </div>
@endsection