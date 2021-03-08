@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Demo styles -->
<style>

  

  .swiper-container {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
</style>
<div class="d-flex flex-column justify-content-center align-items-center position-fixed w-100 h-100 fixed-top" style="background: #f2f2f2;z-index: 10000000000 ;overflow-y: scroll ;">
      <!-- Swiper -->
  <div class="swiper-container" style="background: #f2f2f2 !important;">
    <div class="swiper-wrapper" style="background: #f2f2f2 !important;">
      
      <div class="swiper-slide flex-column p-1" style="background: #f2f2f2 !important;">
        <img src="/img/find_food.png" alt="">
        <h3 class="mt-3">Tu comida favorita</h3>
        <p cl style="font-size: 15px !important ;">Descubra las mejores comidas de más de 1,000 restaurantes y entrega rápida a su puerta</p>
        <button class="btn btn-primary btn-lg">Siguiente</button>
      </div>
      <div class="swiper-slide flex-column p-1" style="background: #f2f2f2 !important;">
        <img src="/img/delivery.png" alt="">
        <h3 class="mt-3">Entrega rápida</h3>
        <p cl style="font-size: 15px !important ;">Descubra las mejores comidas de más de 1,000 restaurantes y entrega rápida a su puerta</p>
        <button class="btn btn-primary btn-lg">Siguiente</button>
      </div>
      <div class="swiper-slide flex-column p-1" style="background: #f2f2f2 !important;">
        <img src="/img/live_tracking.png" alt="">
        <h3 class="mt-3">Seguimiento en vivo</h3>
        <p cl style="font-size: 15px !important ;">Seguimiento en tiempo real de su
          comida en la aplicación una vez
          que realizó el pedido</p>
        <button class="btn btn-primary btn-lg">Siguiente</button>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</div>
@endsection