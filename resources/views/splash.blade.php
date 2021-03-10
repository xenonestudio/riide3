@extends('layouts.app')

@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items center fixed-top position-fixed" style="background-image: url('/img/bg2.jpg');background-position: center;background-size: cover; height: 100% ;">
    <img src="/img/logo_riide.svg" width="200" alt="">
</div>

<script>

    @guest
        setTimeout(function(){
            window.location.href = "/lenguaje"
        },3000);
    @else
        setTimeout(function(){
            window.location.href = "/lo-mas-hot"
        },3000);
    
    @endguest

</script>

@endsection


