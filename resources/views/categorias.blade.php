@extends('layouts.app')

@section('content')
@include("slider-banner")
<div class="container">
    <h3 class="text-center text-muted mt-3">Que vas a comer hoy?</h3>
    <div class="row">
        @foreach($categorias as $c)
        <div class="col-4 mt-4 px-1">
            @include("categoria", ["categoria" => $c ] )
        </div>
        @endforeach
    </div>
    
</div>
<script>
    
   
</script>
@endsection