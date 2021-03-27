  
  
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
   
    <div class="w-100 px-1">
      <!--<div class="container-fluid container-md">-->
      <div class="swiper-container">
        <div class="swiper-wrapper vertical-scrolling-category">
            @foreach ($categorias as $c)
            <div class="swiper-slide card-store mr-3" style="background: transparent">
              <a href="/categorias/{{ $c->id }}" class="card w-100 mt-2 p-2 ml-2" style="text-decoration: none">
                  <div class="w-100 card-img-store" style="background-image: url('/storage/{{ $c->imagen }}') ;background-position: center;background-size: cover;"></div>
                  <div class="card-body p-0">
                    <p class="card-text text-center size-title-card mb-0 text-muted"></p>
                    <div class="w-100 d-flex">
                        <div class="w-100 text-center text-dark title-cat">
                          {{ $c->categoria }}
                        </div>
                    </div>
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