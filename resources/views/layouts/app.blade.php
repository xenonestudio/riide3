<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--<script src='https://kit.fontawesome.com/a076d05399.js' ></script>-->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
    </style>
</head>
<body >
    <div id="app">
        <!-- nav movil -->
        <div class="w-100 bg-primary d-sm-flex d-md-none flex-column header">
            <div class="p-2">
                <div class="form-group has-search px-3 m-0" style="border-radius: 10px ;">
                    <span class="fas fa-search form-control-feedback"></span>
                    <input type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;">
                </div>
            </div>
            <div class="d-flex">
                <div class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <img width="20" height="20" class="rounded-circle" src="https://startfixafrica.co.ke/wp-content/uploads/2018/08/user-sign-icon-person-symbol-human-avatar-vector-12693195-1.jpg" alt="">
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 8px ;">
                        Bahimer
                    </div>
                </div>
                <div class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="fas fa-user-alt" style="font-size: 20px ;"></i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 8px ;">
                        Registrate
                    </div>
                </div>
                <div class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="fas fa-wallet" style="font-size: 20px ;"></i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 8px ;">
                        $100
                    </div>
                </div>
                <div class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="fas fa-shopping-cart" style="font-size: 20px ;"></i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 8px ;">
                        $12
                    </div>
                </div>
            </div>
        </div>
        <!-- nav movil -->
        <div class="w-100 bg-primary d-none d-md-flex bg-primary">
            <div class="py-3 px-5 d-flex justify-content-center align-items-center">
                <img src="/img/logo_riide.svg" width="50" height="50" alt="">
            </div>
            <div class="w-100 d-flex flex-column">
                <div class="w-100 h-100 p-2">
                    <div class="form-group has-search m-0" style="border-radius: 10px ;">
                        <span class="fas fa-search form-control-feedback"></span>
                        <input type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;">
                    </div>
                </div>
                <div class="w-100 h-100 d-flex">
                    <div class="w-100 text-center text-white">Categorias</div>
                    <div class="w-100 text-center text-white">Promociones</div>
                    <div class="w-100 text-center text-white">Quiero ser un Riide</div>
                    <div class="w-100 text-center text-white">Guia de uso</div>
                </div>
            </div>
            <div class="d-flex">
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <i class="fas fa-wallet" style="font-size: 20px ;"></i>
                    </div>
                    <div class="text-center text-white pb-2">$100</div>
                </div>
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <i class="fas fa-shopping-cart" style="font-size: 20px ;"></i>
                    </div>
                    <div class="text-center text-white pb-2">$12</div>
                </div>
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <i class="fas fa-user-alt" style="font-size: 20px ;"></i>
                    </div>
                    <div class="text-center text-white pb-2">Registrate</div>
                </div>
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <img width="30" height="30" class="rounded-circle" src="https://startfixafrica.co.ke/wp-content/uploads/2018/08/user-sign-icon-person-symbol-human-avatar-vector-12693195-1.jpg" alt="">
                    </div>
                    <div class="text-center text-white pb-2">Registrate</div>
                </div>
                <div class="w-100 d-flex flex-column justify-content-center px-3">
                    <div class="text-center text-white">
                        <i class="fas fa-indent" style="font-size: 25px ;"></i>
                    </div>
                </div>
            </div>
        </div>


        <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>-->

        <main class="" style="margin-bottom: 200px ;">
            @yield('content')
        </main>

        <div class="fixed-bottom w-100 d-flex d-md-none" style="height: 60px ;box-shadow: 10px 5px 5px black;
        ">
            <div class="w-100 bg-white d-flex">
                <div class="w-100 d-flex flex-column">
                    <div class="h-100 text-center pt-1">
                        <i class="fas fa-home" style="font-size: 27px ;"></i>
                    </div>
                    <div class="h-100 text-center">sdgsdg</div>
                </div>
                <div class="w-100 d-flex flex-column">
                    <div class="h-100 text-center pt-1">
                        <i class="fas fa-home" style="font-size: 27px ;"></i>
                    </div>
                    <div class="h-100 text-center">sdgsdg</div>
                </div>
            </div>
            <div class=" d-flex justify-content-center bg-white" style="width: 200px ;overflow: hidden ;">
                <div class="bg-primary position-absolute rounded-circle d-flex justify-content-center align-items-center " style="top:-25px;width: 100px ; height: 100px ;font-size: 40px ;">
                    <i class="fas fa-home text-white"></i>
                </div>
            </div>
            <div class="w-100 bg-white d-flex">
                <div class="w-100 d-flex flex-column">
                    <div class="h-100 text-center pt-1">
                        <i class="fas fa-home" style="font-size: 27px ;"></i>
                    </div>
                    <div class="h-100 text-center">sdgsdg</div>
                </div>
                <div class="w-100 d-flex flex-column">
                    <div class="h-100 text-center pt-1">
                        <i class="fas fa-home" style="font-size: 27px ;"></i>
                    </div>
                    <div class="h-100 text-center">sdgsdg</div>
                </div>
            </div>
        </div>

<!--

        <div class="bottom_nav_container d-flex d-md-none">

            <div class="bar_left d-flex">
        
              <button type="submit" class="btn riide-btn btn-small-device d-flex flex-column w-100 pt-2">
                <div class="w-100">
                    <i class="fas fa-percent text-muted" style="font-size: 25px ;"></i>
                </div>
                <div class="w-100 text-muted">Promociones</div>
              </button>
        
              <button type="submit" class="btn riide-btn btn-small-device  d-flex flex-column w-100 pt-2">
                <div class="w-100">
                    <i class="fas fa-wallet text-muted" style="font-size: 25px ;"></i>
                </div>
                <div class="w-100 text-muted">RiidePay</div>
              
              </button>
        
        
            </div>
            <div class="bar_center" >
            
            
              <svg version="1.1" id="Color_Fill_1_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
               y="0px" width="100%"  viewBox="0 29.81 120 90.19" enable-background="new 0 29.81 120 90.19"
               xml:space="preserve">
            <g id="Color_Fill_1">
              <g>
                <path class="path_svg" fill="#FFFFFF" d="M104,41c-5.973,13.627-9.779,36.127-44,36c-34.036-0.126-38.852-20.487-44-36
                  C11.935,28.75,0,29.834,0,29.834V120h120V29.834C120,29.834,109.368,28.75,104,41z"/>
              </g>
            </g>
            </svg>
            
            <div id="btncenter" class="button_center">
              <i class='fas fa-store-alt style='font-size:20px'></i>
            </div>
            
            
            </div>
            <div class="bar_right d-flex">
        
        
                <button type="submit" class="btn riide-btn btn-small-device d-flex flex-column w-100 pt-2">
                    <div class="w-100">
                        <i class="fas fa-th-large text-muted" style="font-size: 25px ;"></i>
                    </div>
                    <div class="w-100 text-muted">Categorias</div>
                  </button>
            
                  <button type="submit" class="btn riide-btn btn-small-device  d-flex flex-column w-100 pt-2">
                    <div class="w-100">
                        <i class="fas fa-bars text-muted" style="font-size: 25px ;"></i>
                    </div>
                    <div class="w-100 text-muted">Mas</div>
        
            </div>
            
          </div>-->

    





    </div>
</body>
</html>
