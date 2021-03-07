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

  @if( count($cartelera) > 0 )
  <div class="swiper-container slider-banner">
    <div class="swiper-wrapper">
        @foreach($cartelera[0]["pancartas"] as $c)
          <a href="{{ $c->enlace }}" class="swiper-slide" style="background-image: url('/storage/{{ $c->pancarta }}') ;background-position: center;background-size: cover;"></a>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  @endif

  
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.slider-banner', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
