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
    
  </style>
    <!-- Swiper -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
        @foreach ($categorias as $c)
        <div class="swiper-slide m-1" style="background: transparent  ;width: auto;">
            <a href="/categorias/{{$c->id}}" type="button" class="btn btn-primary btn-sm mt-2">{{ $c->categoria }}</a>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
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
<!--@foreach ($categorias as $c)
    <button type="button" class="btn btn-primary btn-sm mt-2">{{ $c->categoria }}</button>
@endforeach-->