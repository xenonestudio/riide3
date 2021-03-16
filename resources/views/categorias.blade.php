@extends('layouts.app')

@section('content')
@include("slider-banner")
<div class="container-fluid container-md">
    <h3 class="text-center text-muted mt-3">Que vas a comer hoy?</h3>
    <div class="row">
        @if( count($categorias) > 0 )
            @foreach($categorias as $c)
                <div class="col-4 mt-4 px-1">
                    @include("categoria", ["categoria" => $c ] )
                </div>
            @endforeach
        @endif
    </div>
</div>
<script>
    
   
</script>
@endsection