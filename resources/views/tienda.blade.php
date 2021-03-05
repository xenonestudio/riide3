@extends('layouts.app')

@section('content')

<div style="background-image: url('/storage/{{ $tienda->panel }}') ;background-position: center;background-size: cover;" class="w-100 d-flex flex-column justify-content-end" id="banner-store">
    <div class="w-100 d-flex">
        <div class="pl-2 pb-2 pl-md-5 pb-md-5">
            <img width="60" src="/storage/{{ $tienda->imagen }}" alt="">
        </div>
        <div class="w-100 d-flex flex-column">
            <div class="w-100 d-flex">
                <h4 class="pl-3 pb-0 mb-0 d-flex align-items-center text-white size-tienda-store">Mc Donals</h4>
                <div class="ml-3 d-flex">
                    @if( count( $tienda->horario ) > 0)
                            <script>
                                start = "{{ $tienda->horario[0]->inicio }}";
                                start =  parseInt(start.split(":").join(""));
                                end = "{{ $tienda->horario[0]->fin }}";
                                end =  parseInt(end.split(":").join(""));
                                date = new Date();
                                now = parseInt( date.getHours() + "" + date.getMinutes() );
                                if( start <= now && end >= now ){
                                    document.write('<button type="button" class="btn btn-success btn-sm" style="font-size:10px !important;"><i class="fa fa-circle"></i> Abierto</button>');
                                } else {
                                    document.write('<button type="button" class="btn btn-danger btn-sm" style="font-size:10px !important;"><i class="fa fa-circle"></i> Abierto</button>');
                                }
                                console.log( now ) ;
                            </script>
                        @else
                        @endif
                </div>
                <div class="ml-3 d-flex">
                    <button type="button" class="btn btn-light btn-sm" style="font-size:10px !important;">{{ $tienda->tiempo }} min <i class="far fa-clock"></i> </button>
                </div>
            </div>
            <div class="h-100 d-flex">
                <div class="pl-3" style="width: 80px ;">
                  @if (count($tienda->calificacion) > 0)
                  <span class="text-primary size-cal-store" style="font-size: 20px ;"><i class="fa fa-star"></i> {{ $tienda->calificacion[0]->calificacion }}</span> 
                  @endif   
                </div>
                <div class="pt-1">
                    @for ($i = 0; $i < count( $tienda->categorias ) ; $i++)
                        <div class="d-flex align-items-center text-white size-cat-store" style="height: auto ; width: auto ;position: relative ;float: left ;">
                            @if ( $i > 0 )<i class="fas fa-circle text-white px-2" style="font-size: 5px ;"></i>@endif {{ $tienda->categorias[$i]->categoria }}
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <!--
        <div class="d-flex d-md-none flex-column px-2">
            <div class="h-100 text-right" style="width: 150px ;">
                @if( count( $tienda->horario ) > 0)
                            <script>
                                start = "{{ $tienda->horario[0]->inicio }}";
                                start =  parseInt(start.split(":").join(""));
                                end = "{{ $tienda->horario[0]->fin }}";
                                end =  parseInt(end.split(":").join(""));
                                date = new Date();
                                now = parseInt( date.getHours() + "" + date.getMinutes() );
                                if( start <= now && end >= now ){
                                    document.write('<button type="button" class="btn btn-success btn-sm"><i class="fa fa-circle"></i> Abierto</button>');
                                } else {
                                    document.write('<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-circle"></i> Abierto</button>');
                                }
                                console.log( now ) ;
                            </script>
                        @else
                        @endif
            </div>
            <div class="h-100 text-right" style="width: 150px ;">
                <button type="button" class="btn btn-light btn-sm">{{ $tienda->tiempo }} min <i class="far fa-clock"></i> </button>
            </div>
        </div>-->
    </div>
</div>
<div class="container">

    <div class="row pt-2">
        <div class="col-12 py-3">
            <div class="form-group has-search px-3 m-0 " style="border-radius: 10px ;">
                <span class="fas fa-search form-control-feedback"></span>
                <input type="text" class="form-control m-0" placeholder="Search" style="border-radius: 10px ;background: #bdbdbd  ;">
            </div>
        </div>
        @foreach ($tienda->productos as $p)
        <div class="col-6 col-sm-3 px-2 pl-2 pt-2">
            @include("producto")
        </div>
        @endforeach
        
    </div>
</div>

@endsection