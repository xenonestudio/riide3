  
  
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
   
    
    @foreach ($tiendas as $t)

    <div class="w-100 d-flex ml-2 mt-5">
        <div class="mr-2">
            <i class="fas fa-percent text-primary" style="font-size: 22px"></i>
        </div>
        <div class="mr-3"><img width="50" src="https://venngage-wordpress.s3.amazonaws.com/uploads/2020/04/Curves-Twitch-Banner-Template.png" alt=""></div>
        <div class="w-100">
            <h3 class="mt-0 mb-0">{{ $t->tienda}}</h3>
            @if( count($t->calificacion) > 0 )
                <i class="fa fa-star text-primary"></i> {{ $t->calificacion[0]->calificacion }}
            @endif
        </div>
    </div>

    
    
    <div class="swiper-container">
      <div class="swiper-wrapper">

          @foreach ($t->productos as $p)
          <div class="swiper-slide card-store mr-3" style="background: transparent">
            <a href="/tienda/" class="card w-100 mt-2 p-2 mx-2" style="text-decoration: none">
                <div class="w-100 card-img-store" style="background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2020/04/Curves-Twitch-Banner-Template.png') ;background-position: center;background-size: cover;"></div>
                <div class="card-body p-0">
                  <p class="card-text text-center size-title-card mb-0 text-muted"></p>
                  <div class="w-100 d-flex">
                      <div class="w-100 text-left text-dark" style="font-size: 8px !important;">
                        {{ $p->producto }}
                      </div>
                      <div class="w-100 text-right " style="font-size: 10px !important;">
                        @if( $p->precio_b != null )
                        <b class="text-grey"> <s>{{ $p->precio_a }}</s> </b> 
                        @else
                        <b>{{ $p->precio_a }}</b> 
                        @endif
                       
                      </div>
                  </div>
                  <div class="w-100 d-flex">
                    <div class="w-100 text-left" style="font-size: 6px !important;">
                     <b>{{ $p->tienda->tienda }}</b> 
                    </div>
                    <div class="w-100 text-right " style="font-size: 10px !important;">
                     <b>{{ $p->precio_b }}</b> 
                    </div>
                  </div>
                  <div class="w-100 d-flex mt-3 justify-content-center">
                    <button class="btn btn-primary btn-sm mr-1">
                        <i class="fas fa-minus producto-icon"></i>
                    </button>
                    <input style="width: 30px ;" type="number">
                    <button class="btn btn-primary btn-sm ml-1">
                        <i class="fas fa-plus producto-icon"></i>
                    </button>
                </div>
                </div>
            </a>
          </div>
          @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div> 
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