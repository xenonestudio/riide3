@extends('layouts.app')

@section('content')
@php
    $cont = 0;
@endphp
@foreach ($destacados as $d)
    @if( $d->cartelera != null )
        @include("slider-banner",[ "cartelera" => [$d->cartelera] ])
    @endif
    @if($cont == 1)
        @include("slider-categorias")
    @endif
    <div class="w-100 px-1">
    <!--<div class="container-fluid container-md">-->
        @if( $d->categoria != null )
        <h3 class="mt-3 d-flex align-items-center"> <img src="/img/fuego.svg" width="40" alt=""> {{ $d->categoria->categoria }}</h3>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($d->categoria->productos as $p)
                    <div class="swiper-slide producto-card mr-3" style="background: transparent">
                        @include("components.producto",[ "p" => $p ])
                    </div>
                @endforeach
            </div>
        </div>
        <hr class="w-100">
    @endif
    </div>

    
    @php
        $cont++;
    @endphp
@endforeach
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

  swiper.swipeTo(0);
</script>
@endsection