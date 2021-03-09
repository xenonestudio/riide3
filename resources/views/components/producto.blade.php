<a href="/producto/{{ $p->id }}" class="card p-1 w-100" style="text-decoration: none !important; color: black ;">
    <div class="w-100 imagen-producto" style="background-image: url('/storage/{{ $p->imagen }}') ;background-position: center;background-size: cover;"></div>
    <div class="card-body p-1">
      <div class="w-100 d-flex">
        <div class="w-75 producto-name text-left">
          {{ $p->producto }}
        </div>
        <div class="w-25 d-flex justify-content-end align-items-end producto-price text-right">
         <b>@if( $p->precio_b == null)${{ $p->precio_a }} @else <s style="color: #e0e0e0  ;">${{ $p->precio_a }}</s>@endif</b>
        </div>
      </div>
      <div class="w-100 d-flex">
        <div class="w-100 d-flex align-items-start text-left">
          <span class="" style="font-size: 10px ;"> 
            @if($p->tienda != null)
              {{ $p->tienda->tienda }}
            @endif </span>
        </div>
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
                        <div class="w-100 text-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/>
                          </svg>
                        </div>
                      `);
                    } else {
                      document.write(`
                        <div class="w-100 text-danger">
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
        <div class="w-100  text-right">
          <b>&nbsp;@if( $p->precio_b != null) ${{ $p->precio_b }} @endif </b>
        </div>
      </div>
      <div class="w-100 d-flex justify-content-center mt-1">
          <button class="btn btn-primary btn-sm mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
          </button>
          <input style="width: 30px ;" type="number">
          <button class="btn btn-primary btn-sm ml-1 font-weight-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
          </button>
      </div>
    </div>
</a>