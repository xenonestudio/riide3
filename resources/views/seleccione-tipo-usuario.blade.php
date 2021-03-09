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
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="role_panel" class="w-100 h-100">
                <div class="w-100 h-100">
                
            
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img src="{{ asset('img/logo.png') }}" width="150" class="my-5 " alt="">
                    </div>
                    <div class="col-12">
                        <h3 class="text-center pb-5"  style="">Registrate</h3>
                    </div>
                    <div class="col-12 col-md-4 col-sm-12">
                        <button data-role="1" style="font-size: 18px ;" class="btn btn-primary btn-block mt-md-2 role">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            Usuario 
                        </button>
                        <div class="text-grey text-center w-100 mt-2" style="">Consigue lo que quieras</div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-12">
                        <button data-role="3" style="font-size: 18px ;" class="btn btn-primary btn-block mt-md-2 role">
                            <svg id="Layer_1" fill="white" width="20" height="20" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path class="st0" d="M391.5,104.2H332c-6.4-36.2-38-63.7-76-63.7s-69.6,27.5-76,63.7h-59.5c-6.6,0-12,5.4-12,12v3   c0,6.6,5.4,12,12,12H180c4.9,27.7,24.6,50.3,50.6,59.4h-3.1c-44.2,0-80,35.8-80,80v97c0,13.8,11.2,25,25,25h24c5.5,0,10-4.5,10-10   v-28.3c0-22.4,18.3-40.8,40.8-40.8h17.5c22.4,0,40.8,18.3,40.8,40.8v28.3c0,5.5,4.5,10,10,10h24c13.8,0,25-11.2,25-25v-97   c0-44.2-35.8-80-80-80h-3.1c26-9.1,45.7-31.7,50.6-59.4h59.5c6.6,0,12-5.4,12-12v-3C403.5,109.6,398.1,104.2,391.5,104.2z    M256,170.2c-29,0-52.5-23.5-52.5-52.5c0-29,23.5-52.5,52.5-52.5s52.5,23.5,52.5,52.5C308.5,146.6,285,170.2,256,170.2z"/><path class="st0" d="M256,471.6L256,471.6c-22.4,0-40.8-18.3-40.8-40.8v-66.5c0-22.4,18.3-40.8,40.8-40.8h0   c22.4,0,40.8,18.3,40.8,40.8v66.5C296.8,453.2,278.4,471.6,256,471.6z"/></g></svg>
                            Riider
                        </button>
                        <div class="text-grey text-center w-100 mt-2" style="">Crezcamos juntos</div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-12">
                        <button data-role="2" style="font-size: 18px ;" class="btn btn-primary btn-block mt-md-2 role"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Asociado
                        </button>
                        <div class="text-grey text-center w-100 mt-2" style="">Gana dinero!</div>
                    </div>
                </div>
                </div>
                
            </div>
            <script>
            $(".role").on("click",function(){
                console.log( $(this) );
                localStorage.setItem("role_id", $(this).attr("data-role") );
                window.location.href = "/register"
                //$("input[name=role_id]").val( $(this).attr("data-role") );
                //$("#role_panel").css("display","none");
            })
            </script>
        </div>
    </div>
</div>
      <!--
<div class="container">
    <div class="row mt-5">
        <div class="col-12 offset-md-4 col-md-4 text-center mt-5">
            <h3>Regístrate</h3>
        </div>
        <div class="col-12">
            <div class="row mt-5">
                <div class="col-12 col-md-4 px-md-5 py-2">
                    <button class="w-100 btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        usuario
                    </button>
                </div>
                <div class="col-12 col-md-4 px-md-5 py-2">
                    <button class="w-100 btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        usuario
                    </button>
                </div>
                <div class="col-12 col-md-4 px-md-5 py-2">
                    <button class="w-100 btn btn-primary text-white">
                        <svg id="Layer_1" fill="white" width="20" height="20" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path class="st0" d="M391.5,104.2H332c-6.4-36.2-38-63.7-76-63.7s-69.6,27.5-76,63.7h-59.5c-6.6,0-12,5.4-12,12v3   c0,6.6,5.4,12,12,12H180c4.9,27.7,24.6,50.3,50.6,59.4h-3.1c-44.2,0-80,35.8-80,80v97c0,13.8,11.2,25,25,25h24c5.5,0,10-4.5,10-10   v-28.3c0-22.4,18.3-40.8,40.8-40.8h17.5c22.4,0,40.8,18.3,40.8,40.8v28.3c0,5.5,4.5,10,10,10h24c13.8,0,25-11.2,25-25v-97   c0-44.2-35.8-80-80-80h-3.1c26-9.1,45.7-31.7,50.6-59.4h59.5c6.6,0,12-5.4,12-12v-3C403.5,109.6,398.1,104.2,391.5,104.2z    M256,170.2c-29,0-52.5-23.5-52.5-52.5c0-29,23.5-52.5,52.5-52.5s52.5,23.5,52.5,52.5C308.5,146.6,285,170.2,256,170.2z"/><path class="st0" d="M256,471.6L256,471.6c-22.4,0-40.8-18.3-40.8-40.8v-66.5c0-22.4,18.3-40.8,40.8-40.8h0   c22.4,0,40.8,18.3,40.8,40.8v66.5C296.8,453.2,278.4,471.6,256,471.6z"/></g></svg>
                        usuario
                    </button>
                </div>
            </div>
            
        </div>
    </div>
    
</div>-->
@endsection