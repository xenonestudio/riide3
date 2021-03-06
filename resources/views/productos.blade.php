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
<div class="container">
    <div class="row pt-3">
      <div class="col-12 col-md-6 px-5">
        <div class="producto-imagen" style="background-image: url('/storage/{{ $producto[0]->imagen }}') ;background-position: center;background-size: cover;"></div>
      </div>

      <div class="col-12 col-md-6 px-5 px-md-1">
        <div class="w-100 d-flex pt-2">
            <div>
                <img width="50" src="/storage/{{ $producto[0]->tienda->imagen }}" alt="">
            </div>
            <div class="w-100 pl-2">
                <h3 class="pb-0 mb-0" style="font-size: 18px">{{ $producto[0]->producto }}</h3>
                <p>{{ $producto[0]->tienda->tienda }} <span class="text-primary">  @if( count($producto[0]->tienda->calificacion) > 0 ) <i class="fa fa-star"></i> {{ $producto[0]->tienda->calificacion[0]->calificacion }}@endif </span> </p>
            </div>
            <div>
                <p style="font-size: 22px ;" class="mb-0 px-3">
                  @if( $producto[0]->precio_b != null )
                  <b class="text-muted"> <s>${{ $producto[0]->precio_a }}</s> </b> <br>
                  @else
                  <b>${{ $producto[0]->precio_a }}</b> <br>
                  @endif
                   
                  @if( $producto[0]->precio_b != null )
                  <b>${{ $producto[0]->precio_b }}</b>
                  @endif
                </p>
                <span style="font-size: 10px" class="text-right">Por unidad</span>
            </div>
          </div>

          <div class="w-100">
            <h3>Descripcion</h3>
            <p class="text-grey">{{ $producto[0]->descripcion }}</p>
          </div>

          <div class="w-100 d-flex flex-row flex-md-column-reverse">
            <div class="d-flex justify-content-center">
                <div class="card shadow">
                    <div class="card-body">
                      <p class="card-text text-center">
                          Sub-total <br> 
                          @if( $producto[0]->precio_b != null )
                            <b style="font-size:30px;">${{ $producto[0]->precio_b }}</b>
                          @else
                            <b style="font-size:30px;">${{ $producto[0]->precio_a }}</b>
                          @endif
                      </p>
                    </div>
                  </div>
            </div>
            
            <div class="w-100 d-flex justify-content-end mb-3" style="height: 30px ;">
                    <button class="btn btn-primary btn-sm mr-1">
                        <b>-</b>
                    </button>
                    <input style="width: 30px ;" type="number">
                    <button class="btn btn-primary btn-sm ml-1">
                      <b>+</b>
                    </button>
            </div>

      </div>

    </div>
</div>
<!-- Swiper -->
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