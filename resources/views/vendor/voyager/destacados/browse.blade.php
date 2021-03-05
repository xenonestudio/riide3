@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    
@stop

@section('content')
<script src="https://cdn.jsdelivr.net/gh/RubaXa/Sortable/Sortable.min.js"></script>



    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Sliders</h3>
                <ul class="list-group" style="height: 500px ; overflow-y: scroll ;" id="demo1">
                    @foreach ($carteleras as $c)
                        @php
                            $boolCar = true;
                        @endphp
                
                        @foreach( $destacados as $d )
                            @if( $d->cartelera_id == $c->id )
                                @php
                                    $boolCar = false;
                                @endphp
                            @endif
                        @endforeach
                        @if( $boolCar )
                            <li data-type="cartelera" data-id="{{ $c->id }}" class="list-group-item bg-primary text-white" style="background: #1DBECD !important ;"> <b>{{ $c->titulo }}</b> </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Lo mas hot</h3>
                <ul class="list-group" style="height: 500px ; overflow-y: scroll ;" id="demo2">
                    @foreach( $destacados as $d )
                        @if( $d->cartelera_id != null )
                            <li data-type="cartelera" data-id="{{ $d->cartelera->id }}" class="list-group-item bg-primary text-white" style="background: #1DBECD !important ;"> <b>{{ $d->cartelera->titulo }}</b> </li>
                        @endif
                        @if( $d->categoria_id != null )
                            <li data-type="categoria" data-id="{{ $d->categoria->id }}" class="list-group-item text-black" style="background: #e0e0e0 !important ;"> <b>{{ $d->categoria->categoria }}</b> </li>
                        @endif
                    @endforeach
                    
                  </ul>
            </div>
            <div class="col-md-4">
                <h3>Categorias</h3>
                <ul class="list-group" style="height: 500px ; overflow-y: scroll ;" id="demo3">
                    @foreach ($categorias as $c)
                        @php
                            $boolCat = true;
                        @endphp
                        
                        @foreach( $destacados as $d )
                            @if( $d->categoria_id == $c->id )
                                @php
                                    $boolCat = false;
                                @endphp
                            @endif
                        @endforeach
                        @if( $boolCat )
                            <li data-type="categoria" data-id="{{ $c->id }}" class="list-group-item text-black" style="background: #e0e0e0  !important ;"> <b>{{ $c->categoria }}</b> </li>
                        @endif
                        
                    @endforeach
                  </ul>
            </div>
        </div>
    </div>

    <button id="store" class="btn btn-primary">Guardar</button>





    
        
    </div>
@stop

@section('css')

@stop

@section('javascript')
    <script>
    $(function(){

        $("#store").on("click",function(){
            console.log( $("#demo2").children() );
            $li =  $("#demo2").children();
            $data = "";
            for( $i = 0 ; $i < $("#demo2").children().length ; $i++ ){
                if( $i > 0  ){
                    $data += "_"
                }
                console.log($($li[$i]).attr("data-id"));
                $data += $($li[$i]).attr("data-type") + "-" +$($li[$i]).attr("data-id");
            
            }
            console.log($data)
            location.href = "/admin/lomashot/" + $data
        });

        

        Sortable.create(demo1, {
  animation: 100,
  group: 'list-1',
  draggable: '.list-group-item',
  handle: '.list-group-item',
  sort: true,
  filter: '.sortable-disabled',
  chosenClass: 'active'
});

Sortable.create(demo2, {
  group: 'list-1',
  handle: '.list-group-item'
});

Sortable.create(demo3, {
  group: 'list-1',
  handle: '.list-group-item'
});


    })
    </script>
@stop
