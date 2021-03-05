  
  
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
  @foreach ($categorias as $c)
  @if( count( $c->tiendas ) > 0 )
  
  <h3 class="mt-3">{{ $c->categoria }}</h3>
  <div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($c->tiendas as $t)
        <div class="swiper-slide card-store mr-3" style="background: transparent">
            <a href="/tienda/{{ $t->id }}" class="card w-100 mt-2 p-2" style="text-decoration: none">
                <div class="w-100 card-img-store" style="background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2020/04/Curves-Twitch-Banner-Template.png') ;background-position: center;background-size: cover;"></div>
                <div class="card-body p-0">
                  <p class="card-text text-center size-title-card mb-0 text-muted">{{ $t->tienda }}</p>
                  <div class="w-100 d-flex">
                      <div class="w-100 calificacion d-flex justify-content-start align-items-center text-left">
                        &nbsp; @if( count( $t->calificacion ) > 0) <i class="fas fa-star"></i> {{ $t->calificacion[0]->calificacion }} @endif  
                      </div>
                      <div class="w-100 text-right ">
                        &nbsp;
                        @if( count( $t->horario ) > 0)
                            <script>
                                start = "{{ $t->horario[0]->inicio }}";
                                start =  parseInt(start.split(":").join(""));
                                end = "{{ $t->horario[0]->fin }}";
                                end =  parseInt(end.split(":").join(""));
                                date = new Date();
                                now = parseInt( date.getHours() + "" + date.getMinutes() );
                                if( start <= now && end >= now ){
                                    document.write('<i class="fas fa-circle text-success"></i>');
                                } else {
                                    document.write('<i class="fas fa-circle text-danger"></i> ');
                                }
                                console.log( now ) ;
                            </script>
                            
                        @else
                             
                        @endif
                      </div>
                  </div>
                </div>
            </a>
          </div>
          
        @endforeach

      
    </div>
    <div class="swiper-pagination"></div>
  </div> 
  <hr class="w-100 ">
  @endif
  
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


<!--<a href="/categorias/" class="card w-100 mt-2 p-2" style="text-decoration: none">
    <div class="w-100 card-img-store" style="background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2020/04/Curves-Twitch-Banner-Template.png') ;background-position: center;background-size: cover;"></div>
    <div class="card-body p-0">
      <p class="card-text text-center size-title-card mb-0 text-muted">sdgsgs</p>
      <div class="w-100 d-flex">
          <div class="w-100">
              <i class="fas fa-star"></i> 4.5
          </div>
          <div class="w-100 text-right ">
              <i class="fas fa-circle text-success"></i>
          </div>
      </div>
    </div>
</a>-->