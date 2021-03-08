@extends('layouts.app')

@section('content')
<style>
    .swiper-container {
      width: 100%;
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
    .swiper-slide {
    }
</style>
<!-- Swiper -->
@include("slider-banner",[ "cartelera" => $cartelera ])

<div class="container">

    @foreach ($tiendas as $t)
        @if( count( $t->productos ) > 0 )
        <div class="row my-3">
            <div class="col-12">
                <div class="w-100 d-flex">
                    <div class="text-primary d-flex justify-content-center align-items-center px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                            <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                          </svg>
                    </div>
                    <div>
                        <img src="/storage/{{$t->imagen}}" width="60" height="60" alt="">
                    </div>
                    <div class="d-flex flex-column w-100">
                        <div class="w-100 h-100 d-flex align-items-center pl-2">{{ $t->tienda }}</div>
                        <div class="w-100 h-100 px-2 d-flex align-items-center text-primary">
                            @if( count( $t->calificacion ) > 0 )
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>&nbsp;
                                <b>{{$t->calificacion[0]->calificacion}}</b> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($t->productos as $p)
                    <div class="swiper-slide producto-card mr-3" style="background: transparent">
                        @include("components.producto",[ "p" => $p ])
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

</script>
@endsection