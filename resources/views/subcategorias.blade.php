@extends('layouts.app')

@section('content')
@include("slider-banner")
<div class="container">
    @include("button-categoria")
    @foreach ($categorias as $c)
        @if ( count( $c->productos ) > 0 )
            <h3 class="mt-3">{{ $c->categoria }}</h3>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($c->tiendas as $t)
                        <div class="swiper-slide tienda-card mr-3" style="background: transparent">
                            @include("components.tienda",[ "t" => $t ])
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
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

  swiper.swipeTo(0);
</script>
@endsection