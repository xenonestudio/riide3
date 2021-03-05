<a href="/producto/{{ $p->id }}" class="card p-1 w-100" style="text-decoration: none !important; color: black ;">
    <div class="w-100 imagen-producto" style="background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2020/04/Curves-Twitch-Banner-Template.png') ;background-position: center;background-size: cover;"></div>
    <div class="card-body p-1">
      <div class="w-100 d-flex justify-content-between">
          <div class="producto-name">
              {{ $p->producto }}
          </div>
          <div class="producto-price">
            <b>&nbsp;${{ $p->precio_a }}</b> <br>
            <b>&nbsp;${{ $p->precio_b }}</b>  
          </div>
      </div>
      <div class="w-100 d-flex justify-content-center">
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