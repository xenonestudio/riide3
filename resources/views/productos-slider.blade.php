  
  
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
   
    <div class="container">

      <h3 class="mt-3">{{ $d->categoria->categoria }}</h3>
    <div class="swiper-container">
      <div class="swiper-wrapper">

          @foreach ($d->categoria->productos as $p)
          <div class="swiper-slide card-producto mr-3" style="background: transparent">
            <a href="/producto/{{ $p->id }}" class="card w-100 mt-2 p-2 mx-2" style="text-decoration: none">
                <div class="w-100 product-img" style="background-image: url('/storage/{{ $p->imagen }}') ;background-position: center;background-size: cover;"></div>
                <div class="card-body p-0">
                  <p class="card-text text-center size-title-card mb-0 text-muted"></p>
                  <div class="w-100 d-flex">
                      <div class="w-100 text-left product-name text-dark">
                        {{ $p->producto }}
                      </div>
                      <div class="w-100 text-right product-price">
                        @if( $p->precio_b != null )
                        <b class="text-grey"> <s>{{ $p->precio_a }}</s> </b> 
                        @else
                        <b>{{ $p->precio_a }}</b> 
                        @endif
                       
                      </div>
                  </div>
                  <div class="w-100 d-flex">
                    <div class="w-100 text-left product-store">
                     {{ $p->tienda->tienda }}
                    </div>
                    <div class="w-100 text-right product-price">
                     <b class="text-dark">{{ $p->precio_b }}</b> 
                    </div>
                  </div>
                  
                </div>
                <div class="w-100 d-flex mt-3 justify-content-center" style="height: 30px;">
                  <button class="btn btn-primary btn-sm mr-1">
                      <b>-</b>
                  </button>
                  <input style="width: 30px ;" type="number">
                  <button class="btn btn-primary btn-sm ml-1">
                    <b>+</b>
                  </button>
                </div>
            </a>
          </div>
          @endforeach

          
            
  
        
      </div>
      <div class="swiper-pagination"></div>
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
  
      swiper.swipeTo(0);
    </script>