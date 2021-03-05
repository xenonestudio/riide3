@extends('layouts.app')

@section('content')
@include("slider-banner")
<div class="container">
    @include("button-categoria")
    @include("card-store")
</div>
@endsection