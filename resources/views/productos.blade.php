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

@if( count($producto) > 0 )
<div class="w-100  px-1">
  <!--<div class="container-fluid container-md">-->
  <div class="row pt-3">
    <div class="col-12 col-md-6 px-md-5">
      <div class="producto-imagen" style="background-image: url('/storage/{{ $producto[0]->imagen }}') ;background-position: center;background-size: cover;"></div>
    </div>

    <div class="col-12 col-md-6 px-md-5 px-md-1">
      <div class="w-100 d-flex pt-2">
          @if( $producto[0]->tienda != null )
            <div>
              <img width="50" src="/storage/{{ $producto[0]->tienda->imagen }}" alt="">
            </div>
            <div class="w-100 pl-2">
              <h3 class="pb-0 mb-0" style="font-size: 18px">{{ $producto[0]->producto }}</h3>
              <p>{{ $producto[0]->tienda->tienda }} <span class="text-primary">  @if( count($producto[0]->tienda->calificacion) > 0 ) <i class="fa fa-star"></i> {{ $producto[0]->tienda->calificacion[0]->calificacion }}@endif </span> </p>
            </div>
          @endif
          

          <div>
              <p style="font-size: 22px ;" class="mb-0 px-3">
                @if( $producto[0]->precio_b != null )
                <b style="color: #a5a5a5  ;"> <s>${{ $producto[0]->precio_a }}</s> </b> <br>
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


        <div class="product_description_section">
          <div class="w-100">
            <h3>Descripcion</h3>
            <p class="text-grey">{{ $producto[0]->descripcion }}</p>
          </div>
  
          <div class="w-100 buttons_to_add" style="height: 30px ;">
            <button class="btn btn-primary btn-sm mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
            </button>
            <input class="input-number" style="width: 35px ;" type="number">
            <button class="btn btn-primary btn-sm ml-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </button>
          </div>
        </div>


        <div class="container_total_price">
          <div class="container_total_price_card">
              <div class="card shadow">
                  <div class="card-body">
                    <p class="card-text">
                        Sub-total <br> 
                        @if( $producto[0]->precio_b != null )
                          <b>${{ $producto[0]->precio_b }}</b>
                        @else
                          <b>${{ $producto[0]->precio_a }}</b>
                        @endif
                    </p>
                  </div>
                </div>
          </div>
          
          
    </div>
    <div class="w-100 mt-5 ">
      <h6>Detalles</h6>
      <textarea class="w-100 border-0 outline-0" name="" id="" cols="30" rows="5"></textarea>
    </div>

    <div class="w-100 d-flex mt-3">
      <button class="w-100 mr-3 py-2 btn btn-primary">
        Agregar
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
      </button>
      <button class="w-100 ml-3 py-2 btn btn-primary">
        Ir al carrito
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
      </button>
    </div>
    
    

  </div>
  <div class="col-12">

    <div class="related_products">

      <span class="dividing_line"></span>

      <h3 class="mt-3">Productos relacionados</h3>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          @if( $producto[0]->tienda != null )
            @if( count( $producto[0]->tienda->productos ) > 0 )
              @foreach ($producto[0]->tienda->productos as $p)
                @if( $producto[0]->id != $p->id )
                  <div class="swiper-slide producto-card mr-3" style="background: transparent">
                    @include("components.producto")
                  </div>
                @endif
              @endforeach
            @endif
          @endif
        </div>
        <div class="swiper-pagination"></div>
      </div> 

  </div>


</div>
</div>
@else

<h1 class="text-center mt-5">Producto no encontrado</h1>

@endif




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