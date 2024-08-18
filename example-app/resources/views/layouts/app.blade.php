<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pin Me') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css" integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/regular.min.css" integrity="sha512-3YMBYASBKTrccbNMWlnn0ZoEOfRjVs9qo/dlNRea196pg78HaO0H/xPPO2n6MIqV6CgTYcWJ1ZB2EgWjeNP6XA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css" integrity="sha512-+ouAqATs1y4kpPMCHfKHVJwf308zo+tC9dlEYK9rKe7kiP35NiP+Oi35rCFnc16zdvk9aBkDUtEO3tIPl0xN5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.css" integrity="sha512-JXsY+my0lvgobaP74TuVYGWdD/jxFTTcAUd9Wu56yt10PDKd64tP1aAgv/f/yQ5Xwe0zafm38oqOcxnjEkubWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css" integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.css" integrity="sha512-2Z3vsCk5JtNTt8vPBuIjFlQA81Y6OpMGvYkZ9CIB2kucdm9JZTmCv9/dTt64Oqr3j9MsoPWsiHQosAXP+SyqVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/regular.css" integrity="sha512-5oOoG/ls8daHGLiuBb+cCpNzYyatyKYgTF8Dtft1mdovTB36vWEGkgm5uC5tZLQgpPIlYM2uoNokDZvnpwY38w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/regular.min.css" integrity="sha512-3YMBYASBKTrccbNMWlnn0ZoEOfRjVs9qo/dlNRea196pg78HaO0H/xPPO2n6MIqV6CgTYcWJ1ZB2EgWjeNP6XA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/solid.css" integrity="sha512-IKe4N4FUbftCzEO99y/e8Zg4TBO0lx/uf1eAJghbMCoLVfhnMC/BO1h235c8VO6ZNKXq/Dv88s8fHHvj0BG5vQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/solid.min.css" integrity="sha512-bdTSJB23zykBjGDvyuZUrLhHD0Rfre0jxTd0/jpTbV7sZL8DCth/88aHX0bq2RV8HK3zx5Qj6r2rRU/Otsjk+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/svg-with-js.css" integrity="sha512-4oWI3xjQr+NI9rp4/pD2TFz5OnP/YEnup9/Jx1q3+4vHOHW4PNC6OU9armksSr/ir2j8xrep5rtgfotbysS+qQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/svg-with-js.min.css" integrity="sha512-kykcz2VnxuCLnfiymkPqtsNceqEghEDiHWWYMa/nOwdutxeFGZsUi1+TEWT4MyesfxybNGpJNCVXzEPXSO8aKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v4-font-face.css" integrity="sha512-Lo3LUYRdU4VJTUDoxda23BSxV/Zx/EWXJXue6qJA6eErwZqStKr6jclNRAI/lwiFaOl+DvFUjwv0U+Cy6bS7YA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v4-font-face.min.css" integrity="sha512-p0AmrzKP8l63xoFw9XB99oaYa40RUgDuMpdkrzFhi4HPHzO3bzyN2qP6bepe43OP3yj9+eGQEJGIGPcno1JdPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v5-font-face.min.css" integrity="sha512-H2YXTLk5bs3DqvCfOEFsHmsjKW/qLp8SqsqVuPVwZzA5WFudPvPJisFKba2Km3sZNNBapYsZjSMTmRVcfxb5yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.js" integrity="sha512-jdM4CX13QmorrIpE3U+2hOxEO+j6hy9nZFUMIIC8LvNS699p7mxonP7z//UnPGs3Vkn299GKD9FWN60m1tZGxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/brands.js" integrity="sha512-exoQSAqSvvxpwOZkJvvWiChzE94PmdauulWHR8riiTwcWkrLsulPbWgD4ilHHBgHS+5AIm6tjH8yXWc8qP5yRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/brands.min.js" integrity="sha512-3Zn/FU2NPNNFPn4888PtuSwAzZh7osT9728qBI3FcY33PywjzSM96QVjciohyurUKr6ketdyNYTdNvPauAnEmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.slim.js" integrity="sha512-G1QAKkF7DrLYdKiz55LTK3Tlo8Vet2JnjQHuJh+LnU0zimJkMZ7yKZ/+lQ/0m94NC1EisSVS1b35jugu3wLdQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.slim.min.js" integrity="sha512-fYjSocDD6ctuQ1QGIo9+Nn9Oc4mfau2IiE8Ki1FyMV4OcESUt81FMqmhsZe9zWZ6g6NdczrEMAos1GlLLAipWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    
          <!--libraries for firebase started-->
  <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
  <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
<script>
         $(document).ready(function(){
            let table = new DataTable('#table');
         });

         function closeModalChangePassword()
         {
            $("#containerChangePassword").hide();
         }
         function openModalChangePassword()
         {
            $("#containerChangePassword").show();
         }
         function changePassword()
         {
            if($("#inputSignUpPassword").val().trim() == "")
            {
                alert("write password")
                $("#inputSignUpPassword").addClass('border-danger')
            }
            else 
            {
                window.location.href = "/admin/write-password?password="+$("#inputSignUpPassword").val();

            }
         }
         function DELETE(url,rowID)
          {
            
               if(confirm('Are you sure to delete this item'))
               {
                $("#"+rowID).find('td:first-child').html($('<i style="font-weight:900" > Deleting.... </i>'));;
                  $("#"+rowID).addClass("opacity-3");
                    $.ajax({
                    type : 'GET',
                    url : url,
                    success : function(e)
                    {
                        $("#"+rowID).slideUp("slow");
                    },
                    error: function(e)
                    {

                    }
                }) 
               }
               {
                 
               }
          }


</script>
</head>
<body style="background-color: #ececec;"  >
    <div id="app" class="col-lg-12 col-md-12 col-sm-12 no-padding d-flex" >
    @auth
        <aside class="col-lg-2 col-md-12 col-sm-12 no-padding">
            @guest
                           
            @else
                <ul class="list-side-bar">
                    <li>
                        <a class="nav-item nav-brand d-block" href="#">  
                                <div>
                                <img  width="35" height="35" src="/images/logo.png" alt="">
                                <label  class="label-username" >{{ Auth::user()->name }}</label>
                                </div>

                                <i class="fas fa-key btn btn-default pull-right" onclick="openModalChangePassword()" > 

                                </i>     
                                <!-- modal change sign up password -->                               
                        </a>

                      
                     </li>

                     @if(Auth::user()->role != \App\Constants\Constants::USER)
                        <li>
                        <a class="nav-item {{ route('dashboard',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }} " href="{{ route('dashboard',Auth::user()->id) }}">  <label for="">{{ __('Dashboard') }}</label>  <i class="fa fa-angle-right" > </i></a>
                        </li>
                        <li>
                            <a class="nav-item {{ route('users',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }}" href="{{ route('users',Auth::user()->id) }}">  <label for="">{{ __('Users') }}</label>  <i class="fa fa-angle-right" > </i></a>
                        </li>
                        <li>
                            <a class="nav-item {{ route('add-settings',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }}" href="{{ route('add-settings',Auth::user()->id) }}">  <label for="">{{ __('Settings') }}</label>  <i class="fa fa-angle-right" > </i></a>
                        </li>
                     @else 
                            <li>
                            <a class="nav-item {{ route('customer-dashboard',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }} " href="{{ route('customer-dashboard',Auth::user()->id) }}">  <label for="">{{ __('Dashboard') }}</label>  <i class="fa fa-angle-right" > </i></a>
                            </li>
                            <li>
                                <a class="nav-item {{ route('users',Auth::user()->id) == Request::url() ? 'nav-item-selected' : ''  }}" href="{{ route('users',Auth::user()->id) }}">  <label for="">{{ __('History') }}</label>  <i class="fa fa-angle-right" > </i></a>
                            </li>
                     @endif

                   
                     <li>
                        <a class="nav-item "  href="/logout">  <label for="">{{ __('Logout') }}</label>  <i class="fa fa-angle-right" > </i></a>
                     </li>

                    
                </ul>
            @endguest
        </aside>

       

        <main class="screen-hieght col-lg-10 col-md-12 col-sm-12 no-padding">

                    <div id="containerChangePassword" class="container-change-password collapse" >
                        <div class="modal-change-password" >
                            <h5>
                                Change Sign Up Password
                            </h5>

                            <input placeholder="write password" id="inputSignUpPassword" type="text" class="form-control" >
                            
                            <div>
                                <button class="my-4 btn btn-success" onclick="changePassword()" >
                                    {{ __('Change Password') }}
                                </button>

                                <button class="my-4 btn btn-default" onclick="closeModalChangePassword()" >
                                    {{ __('Cancel') }}
                                </button>
                            </div>

                        </div>
                    </div>

            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        @endauth


        @guest

        <main class="col-lg-12 col-md-12 col-sm-12 no-padding">

        @endguest
            @yield('content')
        </main>
    </div>
</body>
</html>
