@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <!--<img src="{{ asset('img/logo.png') }}" width="150" alt="">-->
            <form id="form-5" style="display: none ;" enctype="multipart/form-data" method="POST" class="row mt-5" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role_id" id="role_id">
                <div class="col-md-12">
                    <h3 class="text-center my-5">Usuario</h3>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" style="">Nombre</label>
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
                        <label for="phone" style="">Telefono</label>
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
                        <label for="email" style="">Email</label>
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
                        <label for="password" style="">Password</label>
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
                        <label for="name" style="">Confirm password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="form-group pt-5">
                        <label for="photo" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                              </svg>
                        Foto</label>
                        <input type="file" id="photo" name="photo" style="position: absolute ; width: 0px ;height: 0px ;    display: contents;">
                    </div>
                </div>
                <div class="col-md-12">
                        <!--<div class="w-100 d-flex justify-content-center text-center mt-5" style="">
                            <p style="font-size: 15px ;">Registrarse con</p>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <a class="btn mr-2" style="background: #3b5998 ;color: white ;" > <i class="fa fa-facebook"></i> </a>
                            <a class="btn btn-danger ml-2"> <i class="fa fa-google"></i> </a>
                        </div>-->
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button onclick="alert('Deshabilitado para ??sta versi??n')" type="button" style="width: 200px ;" class="btn btn-primary">
                                    Register
                    </button>
                </div>
            </form>
            <form id="form-3" style="display: none ;" enctype="multipart/form-data" method="POST" class="row mt-5" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role_id">
                <div class="col-md-12">
                    <h3 class="text-center my-5">Asociado</h3>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="NameGroup">
                        <label for="name" style="">Nombre</label>
                        <input id="name" type="text"  oninput="input_validate(this,'NameGroup','name')" class="form-control p-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="NameGroupMessage"></p>
                        </span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="type_doc" class="mb-1" style="">Tipo de documento</label>
                    <div class="input-group mb-3" id="DniGroup">             
                        <div class="input-group-prepend">
                            <select class="input-selected-s" name="type_document" style="width: 40px !important ;" id="type_document">
                                <option value="J">J</option>
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <input type="number" maxlength="8" minlength="5"  name="dni" oninput="input_validate(this,'DniGroup','dni')" class="form-control" aria-label="Text input with dropdown button">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="DniGroupMessage"></p>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="PhoneGroup">
                        <label for="phone" style="">Telefono</label>
                        <input id="phone" type="number"  maxlength="10" minlength="10" oninput="input_validate(this,'PhoneGroup','phone')" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="PhoneGroupMessage"></p>
                        </span>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="addressGroup">
                        <label for="address" style="">Direccion</label>
                        <input id="address" type="address" oninput="input_validate(this,'addressGroup','address')" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="addressGroupMessage"></p>
                        </span>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="branches" style="">Numero de sucursales</label>
                        <input id="branches" minlength="1" type="number" class="form-control @error('numbers') is-invalid @enderror" name="branches" value="{{ old('numbers') }}" required autocomplete="numbers">
                        @error('branches')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="emailgroup">
                        <label for="email" style="">Email</label>
                        <input id="email" type="email" oninput="input_validate(this,'emailgroup','email')" class="form-control" name="email" required> 
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="emailgroupMessage"></p>
                        </span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3 offset-md-3">
                    <div class="form-group" id="passwordGroup">
                        <label for="password" style="">Password</label>
                        <input id="password" minlength="8" type="password" oninput="validatePassword(this,'passwordGroup')" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="passwordGroupMessage"></p>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" id="passwordConfirmGroup">
                        <label for="name" style="">Confirme contrasena</label>
                        <input id="password-confirm" oninput="validatePasswordConfirmate(this,'passwordConfirmGroup')" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="passwordConfirmGroupMessage"></p>
                        </span>
                    </div>
                    
                </div>
                <div class="col-md-12 text-center">
                    <div class="form-group pt-5">
                        <label for="photoA" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                              </svg>
                        Foto</label>
                        <input type="file" id="photoA" name="photo" style="position: absolute ; width: 0px ;height: 0px ;    display: contents;">
                        <img src="" class="noview" width="150px" height="120px" id="photo_user2">
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" style="width: 200px ;" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
            <form id="form-4" style="display: none ;" enctype="multipart/form-data" method="POST" class="row mt-5" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role_id">
                <div class="col-md-12">
                    <h3 class="text-center my-5">Riider</h3>
                </div>
                <div class="col-md-4">
                    <div class="form-group2" id="NameGroup2">
                        <label for="name" style="">Nombre</label>
                        <input id="name" type="text" maxlength="20" oninput="input_validate(this,'NameGroup2','name')" class="form-control p-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="type_doc" class="" style="">Tipo de documento</label>
                    <div class="input-group mb-3" id="DniGroup">             
                        <div class="input-group-prepend">
                            <select class="input-selected-s" name="type_document" style="width: 40px !important ;" id="type_document">
                                <option value="J">J</option>
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <input maxLength="8" minlength="5" type="number" oninput="input_validate(this,'DniGroup','dni')" name="dni" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="PhoneGroup2">
                        <label for="phone" style="">Telefono</label>
                        <input id="phone" type="number" maxLength="10" oninput="input_validate(this,'PhoneGroup2','phone')" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="PhoneGroup2Message"></p>
                        </span>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="addressGroup2">
                        <label for="address" style="">Direccion</label>
                        <input id="address" type="address" oninput="input_validate(this,'addressGroup2','address')" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_work" style="">Ultimo trabajo</label>
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
                        <label for="last_boss" style="">Ultimo jefe</label>
                        <input id="last_boss" type="text" class="form-control @error('last_boss') is-invalid @enderror" name="last_boss" value="{{ old('last_boss') }}" required autocomplete="last_boss">
                        @error('last_boss')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="emailgroup2">
                        <label for="email" style="">Email</label>
                        <input id="email" type="email" oninput="input_validate(this,'emailgroup2','email')" class="form-control" name="email" required>
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="emailgroup2Message"></p>
                        </span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="passwordGroup2">
                        <label for="password" style="">Contrasena</label>
                        <input id="password" type="password" oninput="validatePassword(this,'passwordGroup2')" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="passwordGroup2Message"></p>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="passwordConfirm2Group">
                        <label for="name" style="">Confirme contrasena</label>
                        <input id="password-confirm" type="password" oninput="validatePasswordConfirmate(this,'passwordConfirm2Group')" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <p id="passwordConfirm2GroupMessage"></p>
                        </span>
                    </div>
                </div>
                
                            
                            
                            
                <div class="col-md-3 mt-3">
                    <label for="photoR" style="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                          </svg>
                        Foto</label>
                    <input type="file" id="photoR" name="photo" style="display: none ;">
                    <img src="" class="noview" width="150px" height="120px" id="photo_user">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="lc" style="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                      </svg>Licencia de conducir</label>
                    <input type="file" id="lc" name="lc" style="display: none ;">
                    <img src="" class="noview" width="150px" height="120px" id="imagenmuestra">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="cm" style="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                          </svg>
                        Certificado medico</label>
                    <input type="file" id="cm" name="cm" style="display: none ;">
                    <img src="" class="noview" width="150px" height="120px" id="certificado_user">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="ap" style="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                          </svg>
                        Antecedentes penales</label>
                    <input type="file" id="ap" name="ap" style="display: none ;">
                    <img src="" class="noview" width="150px" height="120px" id="antecedentes_user">
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" style="width: 200px ;" class="btn btn-primary">
                                    Register
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


        function readURL(input, div) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            // Asignamos el atributo src a la tag de imagen
            $(div).attr('src', e.target.result);
            }
            $(div).removeClass("noview")
            reader.readAsDataURL(input.files[0]);
        }else{
            $(div).addClass("noview")
        }
        }

        // El listener va asignado al input
        $("#lc").change(function() {
        readURL(this, '#imagenmuestra');
        });
            
        $("#photoR").change(function() {
        readURL(this, '#photo_user');
        });
        $("#photoA").change(function() {
        readURL(this, '#photo_user2');
        });

        $("#cm").change(function() {
        readURL(this, '#certificado_user');
        });

        $("#ap").change(function() {
        readURL(this, '#antecedentes_user');
        });



        })
</script>
<script src="{{ asset('js/lex_input.js') }}"></script>

@endsection
