<div class="card p-1 product_card">


<a href="/producto/{{ $p->id }}" class="product_card_link">
  <div class="product_card_img_container">

    <div class="product_card_img_bg" style="background-image: url('/storage/{{ $p->imagen }}')">
    
    </div>

    <div class="product_card_img">
      <img src="/storage/{{ $p->imagen }}" alt="Imagen de {{ $p->producto }} de la tienda: {{ $p->tienda->tienda }}">
    </div>

  </div>
</a>



    <div class="card-body p-1">
      <div class="w-100 d-flex">

        <div class="product_card_title">
          <h4>
            {{ $p->producto }}
          </h4>
        </div>

        <div class="product_card_price">
          <p>
            @if( $p->precio_b == null)${{ $p->precio_a }} @else <s>${{ $p->precio_a }}</s>@endif
          </p>
        </div>

      </div>
      <div class="w-100 d-flex" style="margin-top: 5px;">
        <div class="product_card_store">
            @if($p->tienda != null)
              <h5>
                {{ $p->tienda->tienda }}
              </h5>
            @endif


            <div class="store_active_schedule">
                @if( Route::current()->getName() == "lomashot" )

                @if( $p->tienda != null )
                    @if( count( $p->tienda->horario ) > 0)
                      <script>
                        start = "{{ $p->tienda->horario[0]->inicio }}";
                        start =  parseInt(start.split(":").join(""));
                        end = "{{ $p->tienda->horario[0]->fin }}";
                        end =  parseInt(end.split(":").join(""));
                        date = new Date();
                        now = parseInt( date.getHours() + "" + date.getMinutes() );
                        if( start <= now && end >= now ){
                          document.write(`
                            <div class="check_circle text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                              </svg>
                            </div>
                          `);
                        } else {
                          document.write(`
                            <div class="check_circle text-danger">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                          </div>
                        `);
                        }
                      </script>
                    @else
                    @endif
                @endif
              @endif
            </div>
        </div>



        <div class="product_card_price_b">
          <p>&nbsp;@if( $p->precio_b != null) ${{ $p->precio_b }} @endif </p>
        </div>


      </div>

      <!-- buttons to select quantity -->
      <div class="w-100 d-flex justify-content-center mt-1">
          <button class="btn btn-primary btn-sm mr-1 lexsank_quantity-buttons">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
          </button>
          <input class="lexsank_quantity-input" type="number" max="99" min="1">
          <button class="btn btn-primary btn-sm ml-1 font-weight-bold lexsank_quantity-buttons">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
          </button>
      </div>


    </div>
</div>