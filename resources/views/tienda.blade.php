@extends('layouts.app')

@section('content')

@if( count($tienda) > 0)
<div style="background-image: url('/storage/{{ $tienda[0]->panel }}') ;background-position: center;background-size: cover;" class="w-100 d-flex flex-column justify-content-end" id="banner-store">
    <div class="w-100 d-flex">
        <div class="pl-2 pb-2 pl-md-3 pb-md-3">
            <img width="60" src="/storage/{{ $tienda[0]->imagen }}" alt="">
        </div>
        <div class="w-100 d-flex flex-column" style="overflow: hidden;">
            <div class="w-100 d-flex">
                <h4 class="pl-3 pb-0 mb-0 d-flex align-items-center text-white size-tienda-store">{{ $tienda[0]->tienda }}</h4>
                <div class="ml-3 d-flex">
                    @if( count( $tienda[0]->horario ) > 0)
                            <script>
                                start = "{{ $tienda[0]->horario[0]->inicio }}";
                                start =  parseInt(start.split(":").join(""));
                                end = "{{ $tienda[0]->horario[0]->fin }}";
                                end =  parseInt(end.split(":").join(""));
                                date = new Date();
                                now = parseInt( date.getHours() + "" + date.getMinutes() );
                                if( start <= now && end >= now ){
                                    document.write('<button type="button" class="btn btn-success btn-sm font-weight-bold" style="font-size:10px !important;"><i class="fa fa-circle"></i> Abierto</button>');
                                } else {
                                    document.write('<button type="button" class="btn btn-danger btn-sm font-weight-bold" style="font-size:10px !important;"><i class="fa fa-circle"></i> Cerrado</button>');
                                }
                                console.log( now ) ;
                            </script>
                        @else
                        @endif
                </div>
                <div class="ml-3 d-flex">
                    <button type="button" class="btn btn-light btn-sm font-weight-bold" style="font-size:12px !important;">{{ $tienda[0]->tiempo }} min 
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                          </svg>
                    </button>
                </div>
            </div>
            <div class="h-100 d-flex">
                <div class="pl-3">
                  @if (count($tienda[0]->calificacion) > 0)
                    <span class="text-primary size-cal-store d-flex justify-content-start align-items-center" style="font-size: 22px ;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        {{ $tienda[0]->calificacion[0]->calificacion }}
                    </span> 
                  @endif   
                </div>
                <div class="pt-1 text-white" style="overflow: hidden;white-space: nowrap;">
                    @for ($i = 0; $i < count( $tienda[0]->categorias ) ; $i++)
                            &nbsp;
                            @if ( $i > 0 )
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"/>
                                </svg>
                            @endif 
                            &nbsp;
                            {{ $tienda[0]->categorias[$i]->categoria }}
                            
                    @endfor
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="container-fluid container-md">

    <div class="row pt-2">
        <div class="col-12 py-3">
            <div class="form-group has-search px-3 m-0 " style="border-radius: 10px ;">
                <span class="form-control-feedback">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </span>
                <input id="search-store" type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;background: #bdbdbd  ;">
            </div>
        </div>
        @foreach ($tienda[0]->productos as $p)
        <div class="col-6 col-sm-3 px-2 pl-2 pt-2">
            @include("components.producto")
        </div>
        @endforeach
    </div>
</div>
@else

<h1 class="text-center pt-5">tienda no encontrada</h1>

@endif


<script>
    $(function(){
      $("#search-store").on('keypress',function(e) {
        console.log( $(this).val() )
          if(e.which == 13) {
              
              window.location.href = window.location.href + "/search/" + $(this).val().split(" ").join("-")
          }
      });
    })
</script>
@endsection