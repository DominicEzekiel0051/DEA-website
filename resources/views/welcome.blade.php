<!doctype html>


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eTonixglobal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
                font-weight: 400;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    
@extends('layouts.app')
@section('content')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content" >
                <div class="title m-b-lg" >
                <b>DEA INVESTMENT COMPANY</b>
                </div>

                <!-- Example split danger button -->
<div class="btn-group" >
  <button type="button" class="btn btn-warning btn-lg"><a href="/agriculture"><b>DEA Agriculture</b></a></button>
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu bg-success">
      <ul>
           <li><a class="dropdown-item" href="#">Brockeragr</a></li> 
           <li><a class="dropdown-item" href="#">Education</a></li> 
           <li><a class="dropdown-item" href="#">Agro-Consultancy</a></li>  
      </ul>
  </div>
  
</div>

<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-warning btn-lg" href="/technology"><a href="/technology"><b>DEA Technologies</b></a></button>
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu dropdown-success">
      <ul>
           <li><a class="dropdown-item" href="#">Car rental services</a></li> 
           <li><a class="dropdown-item" href="#">Software development</a></li>
      </ul>
  </div>
   
</div>
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-warning btn-lg" href="/health"><a href="/health"><b>DEA Pharmacy</b></a></button>
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu" background="primary">
      <ul>
          <li><a class="dropdown-item" href="#">Action</a></li>  
          <li><a class="dropdown-item" href="#">Another action</a></li>  
          <li><a class="dropdown-item" href="#">Something else here</a></li> 
      </ul>
    
  </div>

</div>
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-warning btn-lg" ><a href="/estate"><b>DEA Estates</b></a></button>
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu bg-info">
      <ul>
         <li><a class="dropdown-item" href="#">Action</a></li>   
         <li><a class="dropdown-item" href="#">Another action</a></li>  
         <li><a class="dropdown-item" href="#">Something else here</a></li> 
      </ul>
  </div>
</div>

               
            </div>
        </div>
    </body>
    @endsection

</html>
