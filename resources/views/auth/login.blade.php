@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/nav-login.css">
<div class="background_grey">
    <div class="topless_login">
  
      <div class="login_container_left">
  
      </div>
  
      <div class="login_container_center">
  
  
  
  
          <svg class="logo_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="507px" height="545.101px" viewBox="46.5 123.766 507 545.101" enable-background="new 46.5 123.766 507 545.101">
          <g id="Capa_x0020_1">
              <path fill="#17C0D5" d="M553.5,668.532V124.099l-507-0.965v545.732c97.452,0-68.589,0,28.863,0
                  c27.287,0,45.478-15.593,46.777-35.083V405.096c0-22.089,29.885-50.675,48.077-50.675c89.656,0,175.414,0,265.07,0
                  c28.586,0,55.872,40.28,54.573,51.974v224.79c-1.3,10.395,16.892,35.083,45.478,36.382L553.5,668.532z"/>
          </g>
          </svg>
  
  
          <div class="logo_img" style="background: url('/img/logo_riide_black.svg')">
          </div>
  
      </div>
  
      <div class="login_container_right">
  
      </div>
  
      </div>

<div class="container h-100">
    <div class="row mt-5">
        <div class="col-12 mt-5">
            <form class="row" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group col-12 offset-md-4 col-md-4 ">
                    <label for="email" class="col-md-4 col-form-label text-md-left">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-12 offset-md-4 col-md-4 ">
                    <label for="password" class="col-md-4 col-form-label text-md-left">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-12 offset-md-4 col-md-4 d-flex justify-content-center">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <p>¿Olvidaste tu contraseña?</p>
                </div>
                <div class="col-12 offset-md-4 col-md-4 d-flex justify-content-center">
                    <button class="btn btn-primary w-100">{{ __('Login') }}</button>
                </div>
                <div class="col-12 mt-3 d-flex justify-content-center">
                    <p>Iniciar sesión con</p>
                </div>
                <div class="col-12 offset-md-4 col-md-4 d-flex justify-content-around">
                    <button type="button" class="btn text-white" style="height: 50px ;background: #3b5998 ;">
                        <svg version="1.1" fill="white" width="22" height="22" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
                            <g>
	                            <path id="f_1_" style="white" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
		                            c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
		                            v20.341H37.29v27.585h23.814v70.761H89.584z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    </button>
                    <button type="button" class="btn text-white" style="height: 50px ;background: #A3AAAE;">
                        <svg width="22" height="22" viewBox="0 0 256 315" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                            <g>
                                <path d="M213.803394,167.030943 C214.2452,214.609646 255.542482,230.442639 256,230.644727 C255.650812,231.761357 249.401383,253.208293 234.24263,275.361446 C221.138555,294.513969 207.538253,313.596333 186.113759,313.991545 C165.062051,314.379442 158.292752,301.507828 134.22469,301.507828 C110.163898,301.507828 102.642899,313.596301 82.7151126,314.379442 C62.0350407,315.16201 46.2873831,293.668525 33.0744079,274.586162 C6.07529317,235.552544 -14.5576169,164.286328 13.147166,116.18047 C26.9103111,92.2909053 51.5060917,77.1630356 78.2026125,76.7751096 C98.5099145,76.3877456 117.677594,90.4371851 130.091705,90.4371851 C142.497945,90.4371851 165.790755,73.5415029 190.277627,76.0228474 C200.528668,76.4495055 229.303509,80.1636878 247.780625,107.209389 C246.291825,108.132333 213.44635,127.253405 213.803394,167.030988 M174.239142,50.1987033 C185.218331,36.9088319 192.607958,18.4081019 190.591988,0 C174.766312,0.636050225 155.629514,10.5457909 144.278109,23.8283506 C134.10507,35.5906758 125.195775,54.4170275 127.599657,72.4607932 C145.239231,73.8255433 163.259413,63.4970262 174.239142,50.1987249" fill="white"></path>
                            </g>
                        </svg>
                    </button>
                    <button type="button" class="btn text-white" style="height: 50px ;background: #db4a39 ;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                        </svg>
                    </button>
                </div>
                <div class="col-12 mt-3 offset-md-4 col-md-4 d-flex justify-content-center">
                    <a href="/lo-mas-hot" class="w-100 btn btn-light bg-light border">Explorar</a>
                </div>
                <div class="col-12 mt-2 offset-md-4 col-md-4 d-flex justify-content-center">
                    <p class="text-center">¿No tienes una cuenta? <a href="/seleccione-tipo-usuario">Regístrate</a> </p>
                </div>
            </form>
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
