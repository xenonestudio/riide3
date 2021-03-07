<a href="/producto/{{ $p->id }}" class="card p-1 w-100" style="text-decoration: none !important; color: black ;">
    <div class="w-100 imagen-producto" style="background-image: url('/storage/{{ $p->imagen }}') ;background-position: center;background-size: cover;"></div>
    <div class="card-body p-1">
      <div class="w-100 d-flex justify-content-between producto-name">
          <div class="producto-name">
              {{ $p->producto }}
          </div>
          <div class="producto-price">
            <b>@if( $p->precio_b == null)${{ $p->precio_a }} @else <s style="color: #e0e0e0  ;">${{ $p->precio_a }}</s>@endif</b><br>
            <b>${{ $p->precio_b }}</b>  
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