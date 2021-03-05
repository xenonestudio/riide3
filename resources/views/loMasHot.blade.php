@extends('layouts.app')

@section('content')
@php
    $cont = 0;
@endphp
@foreach ($destacados as $d)
    @if( $d->cartelera != null )
        @include("slider-banner",[ "cartelera" => [$d->cartelera] ])
    @endif
    @if($cont == 1)
        @include("slider-categorias")
    @endif
    @if( $d->categoria != null )
    @include("productos-slider")
    @endif
    @php
        $cont++;
    @endphp
@endforeach
@endsection