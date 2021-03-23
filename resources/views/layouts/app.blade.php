<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Riide</title>

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
        .analytics-container {
            display: none !important;
        }
    </style>
</head>
<body style="background: #f2f2f2;">
    <div id="app">
        @if( !Route::is("splash") && !Route::is("login") && !Route::is("seleccione-tipo-usuario") && !Route::is("register") )
            <!-- nav movil -->
        <div class="w-100 bg-primary d-sm-flex d-md-none flex-column header">
            <div class="p-2">
                <div class="form-group has-search px-3 m-0" style="border-radius: 10px ;">
                    <span class="form-control-feedback">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </span>
                    <input id="search-movil" type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;">
                </div>
            </div>
            <div class="d-flex">
                @guest
                <a href="/login" class="w-100 h-100 py-2 d-flex flex-column">
                    <div class="w-80 text-center text-white">
                        <i class="" style="font-size: 20px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </i>
                    </div>
                    <div class="w-20 text-center text-white" style="font-size: 10px ;">
                        Ingresar
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
                        @if( \Auth::user()->role_id == 2 || \Auth::user()->role_id == 3 )
                        <a class="dropdown-item" onclick="window.location.href = '/admin';" href="/admin">Panel administrativo</a>
                        @endif
                        
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
            <a href="/lo-mas-hot" class="py-3 px-5 d-flex justify-content-center align-items-center">
                <img src="/img/logo_riide.svg" width="50" height="50" alt="">
            </a>
            <div class="w-100 d-flex flex-column">
                <div class="w-100 h-100 p-2">
                    <div class="form-group has-search m-0" style="border-radius: 10px ;">
                        <span class="form-control-feedback">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </span>
                        <input id="search" type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;">
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
                    <a href="/login" class="w-100 d-flex flex-column justify-content-end px-3">
                        <div class="text-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="text-center text-white pb-2">Ingresar</div>
                    </a>
                @else
                <div class="w-100 d-flex flex-column justify-content-end px-3 id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="text-center text-white dropdown-toggle">
                        <img width="30" height="30" class="rounded-circle" src="/storage/{{ \Auth::user()->avatar }}" alt="">
                    </div>
                    <div class="text-center text-white pb-2">{{ explode(" ", \Auth::user()->name )[0] }}</div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if( \Auth::user()->role_id == 2 || \Auth::user()->role_id == 3 )
                        <a class="dropdown-item"  onclick="window.location.href = '/admin';" href="/admin">Panel administrativo</a>
                        @endif
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
        @endif
        

        <main class="" style="margin-bottom: 200px ;">
            @yield('content')
        </main>
        @if( !Route::is("splash") && !Route::is("lenguaje") && !Route::is("bienvenido") && !Route::is("login") && !Route::is("seleccione-tipo-usuario") && !Route::is("register") )
        
        
        <div class="fixed-bottom d-flex justify-content-center d-flex d-md-none" style="height: 40px ;">
            <div class="w-100 bg-white d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999999"  viewBox="0 0 16 16">
                    <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                <!--<a href="/promociones" class="w-100 h-100 d-flex text-muted justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
                </a>
                <div class="text-center" style="font-size: 8px ;">Promociones</div>-->
            </div>
            <div class="w-100 d-flex d-flex justify-content-center align-items-center bg-white" style="border-top-right-radius: 10px;">
                <svg version="1.1" width="22" height="22" fill="#999999" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.341 469.341"><g><g><g><path d="M437.337,384.007H362.67c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333h74.667
                    c5.896,0,10.667-4.771,10.667-10.667v-32c0-22.368-17.35-40.559-39.271-42.323l-61.26-107
                    c-5.677-9.896-14.844-16.969-25.813-19.906c-10.917-2.917-22.333-1.385-32.104,4.302L79.553,128.007H42.67
                    c-23.531,0-42.667,19.135-42.667,42.667v256c0,23.531,19.135,42.667,42.667,42.667h362.667c23.531,0,42.667-19.135,42.667-42.667
                    v-32C448.004,388.778,443.233,384.007,437.337,384.007z M360.702,87.411l23.242,40.596h-92.971L360.702,87.411z M121.953,128.007
                    L300.295,24.184c4.823-2.823,10.458-3.573,15.844-2.135c5.448,1.458,9.99,4.979,12.813,9.906l0.022,0.039l-164.91,96.013H121.953
                    z"/>
            <path d="M437.337,234.674H362.67c-35.292,0-64,28.708-64,64c0,35.292,28.708,64,64,64h74.667c17.646,0,32-14.354,32-32v-64
                    C469.337,249.028,454.983,234.674,437.337,234.674z M362.67,320.007c-11.76,0-21.333-9.573-21.333-21.333
                    c0-11.76,9.573-21.333,21.333-21.333c11.76,0,21.333,9.573,21.333,21.333C384.004,310.434,374.431,320.007,362.67,320.007z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                <!--<div class="w-100 h-100 d-flex text-muted justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                    </svg>
                </div>
                <div class="text-center" style="font-size: 8px ;">RiidePay</div>-->
            </div>
            <div class="d-flex align-items-end">
                <img src="/img/arco.png" height="30" width="60" alt="">
                <a href="/lo-mas-hot" class="position-absolute d-flex justify-content-center align-items-center bg-primary" style="width: 50px ;height: 50px ;border-radius: 50% ;margin-left: 5px ;margin-bottom: 5px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                </a>
                <!--<svg class="svg" height="30" width="100" color="white" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg"><path d="M100 0v50H0V0c.543 27.153 22.72 49 50 49S99.457 27.153 99.99 0h.01z" fill="white" fill-rule="evenodd"></path></svg>-->
            </div>
            <a href="/categorias" class="w-100 d-flex justify-content-center align-items-center bg-white" style="border-top-left-radius: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999999" class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                </svg>
                <!--<a href="/categorias" class="w-100 h-100 d-flex text-muted justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                    </svg>
                </a>
                <div class="text-center" style="font-size: 8px ;">Categorias</div>-->
            </a>
            <div class="w-100 d-flex justify-content-center align-items-center bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999999" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                <!--<div class="w-100 h-100 d-flex justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="text-center" style="font-size: 8px ;">Mas</div>-->
            </div>
        </div>


        <!--
        <div class="fixed-bottom w-100 d-flex d-md-none">
            <div class="w-100 bg-white d-flex flex-column">
                <a href="/promociones" class="w-100 h-100 d-flex text-muted justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
                </a>
                <div class="text-center" style="font-size: 8px ;">Promociones</div>
            </div>
            <div class="w-100 bg-white d-flex flex-column">
                <div class="w-100 h-100 d-flex text-muted justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                    </svg>
                </div>
                <div class="text-center" style="font-size: 8px ;">RiidePay</div>
            </div>
            <div class="">
                <img width="100" height="50" src="/img/curva.png" alt="">
                <a href="/lo-mas-hot" class="bg-primary shadow position-absolute rounded-circle d-flex justify-content-center align-items-center text-white" style="margin-left: 26px ;  width: 50px ;height: 50px ;top: -28px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                </a>
            </div>
            <div class="w-100 bg-white d-flex flex-column">
                <a href="/categorias" class="w-100 h-100 d-flex text-muted justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                      </svg>
                </a>
                <div class="text-center" style="font-size: 8px ;">Categorias</div>
            </div>
            <div class="w-100 bg-white d-flex text-muted flex-column">
                <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="font-size: 25px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="text-center" style="font-size: 8px ;">Mas</div>
            </div>
        </div>
    -->




        
        <!--<div *ngIf="type" style="z-index: 1000000 ;" #bottomnav class="bottom_nav_container d-flex d-md-none">

            <div class="bar_left d-flex justify-content-around align-items-center">
        
              <a href="/promociones" type="submit" class="btn p-0 riide-btn btn-small-device">
                <div class="elements_buttom">
                  
                  <div class="w-100 text-muted font-weight-bold">
                     <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg> <br>
                      <span style="font-size: 10px !important ;">Promociones</span>
                  </div>
                </div>
            </a>
        
              <a type="submit" class="btn p-0 riide-btn btn-small-device">
                <div class="elements_buttom">
                    <div class="w-100 text-muted font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                          </svg> <br>
                         <span style="font-size: 10px !important ;">RiidePay</span>
                     </div>
                </div>
              
            </a>
        
        
            </div>
            <a href="/lo-mas-hot" class="bar_center">
            
            
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
              <i class='fas fa-store-alt' style='font-size:27px'></i>
            </div>
            
            
        </a>
            <div class="bar_right d-flex justify-content-around align-items-center">
        
                <a href="/categorias" type="submit" class="btn p-0 riide-btn btn-small-device">
                    <div class="elements_buttom">
                      
                      <div class="w-100 text-muted font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                          </svg> <br>
                          <span style="font-size: 10px !important ;">Categorias</span>
                      </div>
                    </div>
                  
                </a>
            
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
            
          </div>-->
          @endif
          <script>
              $(function(){
                $("#search,#search-movil").on('keypress',function(e) {
                    if(e.which == 13) {
                        console.log( $(this).val() )
                        window.location.href = "/search/" + $(this).val().split(" ").join("-")
                    }
                });
              })
          </script>


    </div>
</body>
</html>
