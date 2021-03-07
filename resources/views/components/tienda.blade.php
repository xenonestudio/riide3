<a href="/tienda/{{ $t->id }}" class="card w-100 mt-2 p-2" style="text-decoration: none">
    <div class="w-100 tienda-imagen-card" style="background-image: url('/storage/{{ $t->imagen }}') ;background-position: center;background-size: cover;"></div>
    <div class="card-body p-0">
      <p class="card-text text-center size-title-card mb-0 text-muted">{{ $t->tienda }}</p>
      <div class="w-100 d-flex">
          <div class="w-100 calificacion d-flex justify-content-start align-items-center text-left">
            
            @if( count( $t->calificacion ) > 0) 
              &nbsp;
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>&nbsp;{{ $t->calificacion[0]->calificacion }}
            @endif  
          </div>
          <div class="w-100 text-right">
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
                        document.write(`<span class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                          <circle cx="8" cy="8" r="8"/>
                        </svg></span>`);
                    } else {
                      document.write(`<span class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                          <circle cx="8" cy="8" r="8"/>
                        </svg></span>`);
                    }
                    console.log( now ) ;
                </script>
                
            @else
                 
            @endif
          </div>
      </div>
    </div>
</a>