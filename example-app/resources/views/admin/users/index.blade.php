@extends('layouts.app')

@section('content')


<div class="px-2 py-2 container shadow  bg-white" style="margin-top:50px" > 

<div class="my-4" >
    <a class="btn btn-primary pull-right" href="{{ route('add-user',Auth::user()->id) }}">
        <label for="">{{ __('Add') }}</label> 
    </a>
    <br><br>
</div>


    <table class="table" id="table" >
        <thead  >
            <th>
            {{ __('Name') }}
            </th>
            <th>
            {{ __('Email') }}
            </th>
            <th>
                {{ __('Status') }}
                </th>

                <th>
                {{ __('Balance(Rs)') }}
                </th>

                <th>
              
                </th>
            <th>
            </th>            
        </thead>

        <body>
        @foreach($list as $item)
            <tr id="usersRow{{$item->id}}" >
                <?php
                $object = (object)$item;    
                ?>
                <td>
                {{$object->name}}
                </td>
                <td>
                    {{$object->email}}
                </td>
                <td>
                    <b class="{{ \App\Constants\Constants::VERIABLES[$object->status]}}" >{{ \App\Constants\Constants::VERIABLES[$object->status]}}</b>  
                </td>
                <td  >
                      @if(count($object->wallet) > 0)
                         <h4><b class="{{ \App\Constants\Constants::VERIABLES[$object->status]}}" >{{$object->wallet[0]["balance"]}} </b></h4>
                      @endif
                </td>
                @if($object->id != Auth::user()->id)
                <td>
                  
                    <a class="btn btn-success" href="{{ route('add-user',Auth::user()->id)}}?id={{$object->id}}" >
                        {{ __('Edit') }}
                    </a>
                    <button class="btn btn-danger" onclick="DELETE('{{ route('user-delete',Auth::user()->id)}}?id={{$item->id}}','usersRow{{$item->id}}')"  >
                        {{ __('Delete') }}
                        </button>
                        <a class="btn btn-primary" href="{{ route('add-wallet',Auth::user()->id)}}?customer_id={{$object->id}}" >
                        {{ __('Balance') }}
                    </a>
                </td>
                @else
                <td>
                    
                </td>
                @endif
                <td>
                    
                    </td>

            </tr>
        @endforeach
        </body>
    </table>
    <br><br>
</div>
@endsection
