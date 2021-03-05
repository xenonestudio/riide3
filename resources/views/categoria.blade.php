
<a href="/categorias/{{$categoria["id"]}}" class="card w-100 mt-2 p-2 href-categorias" style="text-decoration: none">
    <div class="w-100 card-img-cat" style="background-image: url('/storage/{{ $categoria["imagen"] }}') ;background-position: center;background-size: cover;"></div>
    <div class="card-body p-0">
      <p class="card-text text-center size-title-card pt-2 text-muted">
          {{ $categoria["categoria"] }}
      </p>
    </div>
</a>
<p class="text-right text-muted">{{ $categoria["tiendas"] }} Tiendas</p>
