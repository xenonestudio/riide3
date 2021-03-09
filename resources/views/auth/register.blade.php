@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <!--<img src="{{ asset('img/logo.png') }}" width="150" alt="">-->
            <form id="form-1" style="display: none ;" enctype="multipart/form-data" method="POST" class="row mt-5" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role_id" id="role_id">
                <div class="col-md-12">
                    <h3 class="text-center my-5">{{ __("data.user") }}</h3>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" style="">{{ __("data.name") }}</label>
                        <input id="name" type="text" class="form-control p-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone" style="">{{ __("data.phone") }}</label>
                        <input id="phone" type="phone" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="email">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email" style="">{{ __("data.email") }}</label>
                        <input id="email" type="email" class="form-control" name="email" required> 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3 offset-md-3">
                    <div class="form-group">
                        <label for="password" style="">{{ __("data.password") }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="form-group">
                        <label for="name" style="">{{ __("data.password_confirm") }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="form-group pt-5">
                        <label for="photo" style="">
                            <img src="/img/attachment.png" width="20" alt="">
                        {{ __("data.attach_photo") }}</label>
                        <input type="file" id="photo" name="photo" style="position: absolute ; width: 0px ;height: 0px ;    display: contents;">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="w-100 d-flex justify-content-center text-center mt-5" style="">
                            <p style="font-size: 15px ;">{{__("data.register_with")}}</p>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <a class="btn mr-2" style="background: #3b5998 ;color: white ;" > <i class="fa fa-facebook"></i> </a>
                            <a class="btn btn-danger ml-2"> <i class="fa fa-google"></i> </a>
                        </div>
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" style="width: 200px ;" class="btn btn-primary">
                                    {{ __('Register') }}
                    </button>
                </div>
            </form>
            <form id="form-2" style="display: none ;" enctype="multipart/form-data" method="POST" class="row mt-5" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role_id">
                <div class="col-md-12">
                    <h3 class="text-center my-5">{{ __("data.associated") }}</h3>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" style="">{{ __("data.name") }}</label>
                        <input id="name" type="text" class="form-control p-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="type_doc" class="mb-1" style="">{{ __("data.type_document") }}</label>
                    <div class="input-group mb-3">             
                        <div class="input-group-prepend">
                            <select name="type_document" style="width: 40px !important ;" id="type_document">
                                <option value="J">J</option>
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <input type="text" name="dni" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone" style="">{{ __("data.phone") }}</label>
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address" style="">{{ __("data.address") }}</label>
                        <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="branches" style="">{{ __("data.numbers") }}</label>
                        <input id="branches" type="number" class="form-control @error('numbers') is-invalid @enderror" name="branches" value="{{ old('numbers') }}" required autocomplete="numbers">
                        @error('branches')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email" style="">{{ __("data.email") }}</label>
                        <input id="email" type="email" class="form-control" name="email" required> 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3 offset-md-3">
                    <div class="form-group">
                        <label for="password" style="">{{ __("data.password") }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" style="">{{ __("data.password_confirm") }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="form-group pt-5">
                        <label for="photo" style="">
                            <img src="/img/attachment.png" width="20" alt="">
                        {{ __("data.attach_photo") }}</label>
                        <input type="file" id="photo" name="photo" style="position: absolute ; width: 0px ;height: 0px ;    display: contents;">
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" style="width: 200px ;" class="btn btn-primary">
                                    {{ __('Register') }}
                    </button>
                </div>
            </form>
            <form id="form-3" style="display: none ;" enctype="multipart/form-data" method="POST" class="row mt-5" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role_id">
                <div class="col-md-12">
                    <h3 class="text-center my-5">{{ __("data.rider") }}</h3>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" style="">{{ __("data.name") }}</label>
                        <input id="name" type="text" class="form-control p-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="type_doc" class="" style="">{{ __("data.type_document") }}</label>
                    <div class="input-group mb-3">             
                        <div class="input-group-prepend">
                            <select name="type_document" style="width: 40px !important ;" id="type_document">
                                <option value="J">J</option>
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <input type="text" name="dni" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone" style="">{{ __("data.phone") }}</label>
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address" style="">{{ __("data.address") }}</label>
                        <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_work" style="">{{ __("data.last_work") }}</label>
                        <input id="last_work" type="text" class="form-control @error('last_work') is-invalid @enderror" name="last_work" value="{{ old('last_work') }}" required autocomplete="last_work">
                        @error('last_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_boss" style="">{{ __("data.last_boss") }}</label>
                        <input id="last_boss" type="text" class="form-control @error('last_boss') is-invalid @enderror" name="last_boss" value="{{ old('last_boss') }}" required autocomplete="last_boss">
                        @error('last_boss')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email" style="">{{ __("data.email") }}</label>
                        <input id="email" type="email" class="form-control" name="email" required> 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password" style="">{{ __("data.password") }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" style="">{{ __("data.password_confirm") }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                
                            
                            
                            
                <div class="col-md-3 mt-3">
                    <label for="photo" style=""><img src="/img/attachment.png" width="20" alt="">{{ __("data.attach_photo") }}</label>
                    <input type="file" id="photo" name="photo" style="display: none ;">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="lc" style=""><img src="/img/attachment.png" width="20" alt="">{{ __("data.lc") }}</label>
                    <input type="file" id="lc" name="lc" style="display: none ;">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="cm" style=""><img src="/img/attachment.png" width="20" alt="">{{ __("data.cm") }}</label>
                    <input type="file" id="cm" name="cm" style="display: none ;">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="ap" style=""><img src="/img/attachment.png" width="20" alt="">{{ __("data.ap") }}</label>
                    <input type="file" id="ap" name="ap" style="display: none ;">
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" style="width: 200px ;" class="btn btn-primary">
                                    {{ __('Register') }}
                    </button>
                </div>
            </form>
                
        </div>
    </div>
</div>
<script>
$(function(){
    $("input[name=role_id]").val( localStorage.getItem("role_id") );
    $("#form-" + localStorage.getItem("role_id") ).css("display","flex");
    //console.log($("input[name=role_id]"))
    
})
</script>

@endsection
