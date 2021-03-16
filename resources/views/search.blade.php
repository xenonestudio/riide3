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
@php
    $currentStore = null;
    $arrayStore = [];
@endphp
@include("slider-banner",[ "cartelera" => $cartelera ])
<div class="container-fluid container-md">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($tiendas as $t)

            @if ( $t->tienda != null )
            @if( $currentStore != $t->tienda->tienda )
            @php
                $currentStore = $t->tienda->tienda;
                $arrayStore[] = $t->tienda->tienda;
            @endphp
            <div class="swiper-slide tienda-card mr-3" style="background: transparent">
                @include("components.tienda",[ "t" => $t->tienda ])
            </div>
        @endif
        @if( $currentStore == null )
            @php
                $currentStore = $t->tienda->tienda;
                $arrayStore[] = $t->tienda->tienda;
            @endphp
            <div class="swiper-slide tienda-card mr-3" style="background: transparent">
                @include("components.tienda",[ "t" => $t->tienda ])
            </div>
        @endif
            @endif

                
            @endforeach
        </div>
    </div>
</div>

<div class="container">
    <div class="w-100">
        @foreach ($arrayStore as $s)
            @php
                $countStore = false;
            @endphp
            @foreach ($tiendas as $t)

                @if($t->tienda != null)
                @if( $s == $t->tienda->tienda && $countStore == false )
                @php
                    $countStore = true;
                @endphp
                <div class="w-100 d-flex mt-5 mb-3">
                    <div>
                        <img src="/storage/{{ $t->tienda->imagen }}" width="60" height="60" alt="">
                    </div>
                    <div class="w-100 d-flex flex-column pl-2">
                        <div class="w-100 h-100">
                            <h3 class="p-0 m-0">{{ $t->tienda->tienda }}</h3>
                        </div>
                        <div class="w-100 h-100 text-primary" style="font-size: 18px ;">
                            @if( count($t->tienda->calificacion) > 0 )
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg> {{ $t->tienda->calificacion[0]->calificacion }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($tiendas as $t)
                                @if( $s == $t->tienda->tienda )
                                    <div class="swiper-slide producto-card mr-3" style="background: transparent">
                                        @include("components.producto",[ "p" => $t ])
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
                @endif

                
            @endforeach   
        @endforeach
    </div>
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