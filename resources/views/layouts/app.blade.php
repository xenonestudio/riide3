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
    <link href="{{ asset('css/tab.css') }}" rel="stylesheet">
    <link href="{{ asset('css/btns.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/f1ee4d2df9.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/f1ee4d2df9.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
    </style>
</head>
<body style="background: #f2f2f2;">
    <div id="app">
        <!-- nav movil -->
        <div class="w-100 bg-primary d-sm-flex d-md-none flex-column header">
            <div class="p-2">
                <div class="form-group has-search px-3 m-0" style="border-radius: 10px ;">
                    <span class="form-control-feedback">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;">
                </div>
            </div>
            <div class="d-flex">
                @guest
                <a href="/register" class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="" style="font-size: 20px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 10px ;">
                        Registrate
                    </div>
                </a>
                @else
                <div class="w-100 h-100 py-2 d-flex flex-column " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="w-80 text-center text-white dropdown-toggle">
                        <img width="30" height="30" class="rounded-circle" src="/storage/{{ \Auth::user()->avatar }}" alt="">
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 10px ;">
                        {{ explode(" ", \Auth::user()->name )[0] }}
                    </div>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>

                </div>
                @endguest
                
                
                <div class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="" style="font-size: 20px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                              </svg>
                        </i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 10px ;">
                        $0
                    </div>
                </div>
                <div class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="" style="font-size: 20px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </svg>
                        </i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 10px ;">
                        $0
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
                        <span class="form-control-feedback">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </span>
                        <input type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;">
                    </div>
                </div>
                <div class="w-100 h-100 d-flex">
                    <a href="/categorias" class="w-100 text-center text-white">Categorias</a>
                    <a href="/promociones" class="w-100 text-center text-white">Promociones</a>
                    <a href="/" class="w-100 text-center text-white">Quiero ser un Riide</a>
                    <a href="/" class="w-100 text-center text-white">Guia de uso</a>
                </div>
            </div>
            <div class="d-flex">
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                        </svg>
                    </div>
                    <div class="text-center text-white pb-2">$0</div>
                </div>
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                    </div>
                    <div class="text-center text-white pb-2">$0</div>
                </div>

                @guest
                    <div class="w-100 d-flex flex-column justify-content-end px-3">
                        <div class="text-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="text-center text-white pb-2">Registrate</div>
                    </div>
                @else
                <div class="w-100 d-flex flex-column justify-content-end px-3">
                    <div class="text-center text-white">
                        <img width="30" height="30" class="rounded-circle" src="/storage/{{ \Auth::user()->avatar }}" alt="">
                    </div>
                    <div class="text-center text-white pb-2">{{ explode(" ", \Auth::user()->name )[0] }}</div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </div>
                @endguest

                
                
                <div class="w-100 d-flex flex-column justify-content-center px-3">
                    <div class="text-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
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










        <div *ngIf="type" style="z-index: 1000000 ;" #bottomnav class="bottom_nav_container d-flex d-md-none">

            <div class="bar_left d-flex justify-content-around align-items-center">
        
              <button type="submit" class="btn p-0 riide-btn btn-small-device">
                <div class="elements_buttom">
                  
                  <div class="w-100 text-muted font-weight-bold">
                     <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg> <br>
                      <span style="font-size: 10px !important ;">Promociones</span>
                  </div>
                </div>
              
              </button>
        
              <button type="submit" class="btn p-0 riide-btn btn-small-device">
                <div class="elements_buttom">
                    <div class="w-100 text-muted font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                          </svg> <br>
                         <span style="font-size: 10px !important ;">RiidePay</span>
                     </div>
                </div>
              
              </button>
        
        
            </div>
            <div class="bar_center">
            
            
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
            
            <div id="btncenter" class="button_center" style="font-size: 30px ;">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                </svg>
              <!--<i class='fas fa-store-alt' style='font-size:27px'></i>-->
            </div>
            
            
            </div>
            <div class="bar_right d-flex justify-content-around align-items-center">
        
                <button type="submit" class="btn p-0 riide-btn btn-small-device">
                    <div class="elements_buttom">
                      
                      <div class="w-100 text-muted font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                          </svg> <br>
                          <span style="font-size: 10px !important ;">Categorias</span>
                      </div>
                    </div>
                  
                  </button>
            
                  <button type="submit" class="btn p-0 riide-btn btn-small-device">
                    <div class="elements_buttom">
                        <div class="w-100 text-muted font-weight-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                              </svg> <br>
                             <span style="font-size: 10px !important ;">Mas</span>
                         </div>
                    </div>
                  
                  </button>
              
        
            </div>
            
          </div>










        <!--
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
        </div>-->

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
