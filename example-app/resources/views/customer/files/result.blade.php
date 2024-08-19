@extends('layouts.app')


@section('content')

<div class="col-lg-12 offset-lg-2 shadow d-flex justify-content-center " style="height:100%" >
    <div class="col-lg-12 shadow d-flex justify-content-center bg-white" style="height: fit-content;margin-top:50px" >
           
        <div class=" px-2 py-2 mx-4 my-4 col-lg-12 col-md-12 col-sm-12"  >
            <h3 class="text-center" >
                <b>{{ __('Results') }}</b>
            </h3>
            
             <div class="col-lg-12 col-md-12 col-sm-12 row" >
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-space-between align-items-center" >
                        <div>
                              <label for="" class="font-weight-normal" >Total Payment(Rs.)</label>  
                        </div>
                        <div>
                               <h3><b>{{$payment->total_payment}}</b></h3>
                        </div>     
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-space-between align-items-center" >
                        <div>
                              <label for="" class="font-weight-normal" >Rate per row(Rs.)</label>  
                        </div>
                        <div>
                               <h4><b>{{$payment->rate_per_row}}</b></h4>
                        </div>     
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-space-between align-items-center" >
                        <div>
                              <label for="" class="font-weight-normal" >Total Records</label>  
                        </div>
                        <div>
                               <h4><b>{{$payment->total_records}}</b></h4>
                        </div>     
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-12 col-sm-12" >
                                <table id="table" class="table table-bordered" >
                                    <thead>
                                        <tr style="background-color:#eaeaea" >
                                        @foreach(str_getcsv($fileContents[0]) as $index=>$item) 
                                            
                                                <th style="font-size:10px;" >{{$item}}</th>
                                            
                                        @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fileContents as $index=>$line) 
                                           
                                                @if($index > 0)
                                                <tr>
                                                    @foreach(str_getcsv($fileContents[$index]) as $index1=>$item) 
                                                            
                                                            <td>{{$item}}</td>
                                                        
                                                    @endforeach
                                                </tr>
                                                @endif
                                           
                                        @endforeach
                                    </tbody>
                                </table>
                               

                    </div>
             </div>   
            <br>
            <br>
            <br>
        </div>    

</div>
</div>

@endsection