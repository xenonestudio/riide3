@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center position-fixed w-100 h-100 fixed-top" style="background: #f2f2f2;z-index: 10000000000 ;overflow-y: scroll ;">
    <div class="w-100 d-flex justify-content-center">
        <img src="/img/logo_blue.png" alt="">
    </div>
    <div class="w-100 d-flex flex-md-row flex-column justify-content-center mt-5">
        <a href="/bienvenido" class="btn btn-primary btn-lg m-1 mr-md-5" style="font-size: 22px ;">Español</a>
        <a href="/bienvenido" class="btn btn-primary btn-lg m-1 ml-md-5" style="font-size: 22px ;">English</a>
    </div>
</div>
@endsection