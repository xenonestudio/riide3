@extends('layouts.app')

@section('content')
@include("slider-banner",[ "cartelera" => $cartelera ])
@include("promociones-slider",[ "tiendas" => $tiendas ])
@endsection