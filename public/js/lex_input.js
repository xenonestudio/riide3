

var P3Word = null;



function input_validate(input, formgrupo, type = null){
    
    var elemento = document.getElementById(formgrupo);
    var Messange = document.getElementById(formgrupo+'Message');

    switch (type) {
        case 'email':
            emailValidate(input, elemento, Messange)
            break;
        case 'address':
            addressValidate(input, elemento)
            break;

        case 'phone':
            PhoneValidate(input, elemento, Messange)
            break;
        case 'name':
            NameValidate(input, elemento)
            break;
        case 'dni':
            DNIValidate(input, elemento)
            break;
    
        default:
            break;
    }

    
}


function emailValidate(input, elemento, Messange){
    var re = /\S+@\S+\.\S+/;
    

    if(re.test(input.value)){
        var URLactual = window.location;
        var xhr = new XMLHttpRequest();
    
        xhr.open('post', 'http://'+URLactual.host+'/api/validateEmail');
        //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.send(JSON.stringify({ "email": input.value}));

        xhr.onreadystatechange = function (response) {
            if (xhr.readyState === 4) {
                if (xhr.status == 200) {

                    if (xhr.response == "0") {
                        elemento.classList.remove("form_validate_error");
                        elemento.classList.add("form_validate_success");
                        Messange.innerHTML = "";
                    }else{
                        elemento.classList.remove("form_validate_success");
                        elemento.classList.add("form_validate_error");
                        Messange.innerHTML = "Email registered by another user";
                    }
                    
                }else{
                    elemento.classList.remove("form_validate_success");
                    elemento.classList.add("form_validate_error");
                    Messange.innerHTML = "No se pudo validar el correo";
                }
               
            }
        };


    }else{
        Messange.innerHTML = "Email no valido";
        elemento.classList.remove("form_validate_success");
        elemento.classList.add("form_validate_error");
    }
}

function addressValidate(input, elemento){
    input.setAttribute('maxLength',25);
    if(input.value.length > 10){
        elemento.classList.remove("form_validate_error");
        elemento.classList.add("form_validate_success");
    }else{
        elemento.classList.remove("form_validate_success");
        elemento.classList.add("form_validate_error");
    }
}

function PhoneValidate(input, elemento, Messange){
    if(input.value.length == 10){
        Messange.innerHTML = "";
        elemento.classList.remove("form_validate_error");
        elemento.classList.add("form_validate_success");
    }else{
        Messange.innerHTML = "telefono incluir codigo de area como:(416,424,412) y debe tener un total de 10 digitos";
        elemento.classList.remove("form_validate_success");
        elemento.classList.add("form_validate_error");
    }
}

function NameValidate(input, elemento){
    if(input.value.length >= 3){
        elemento.classList.remove("form_validate_error");
        elemento.classList.add("form_validate_success");
    }else{
        elemento.classList.remove("form_validate_success");
        elemento.classList.add("form_validate_error");
    }
}

function DNIValidate(input, elemento){
 
    var URLactual = window.location;

    var xhr = new XMLHttpRequest();

    

    var data = new FormData();
    data.append('dni', input.value);

    xhr.open('GET', 'http://'+URLactual.host+'/api/validateDni');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.send('action=jnjtest');
    //xhr.send(data);

    xhr.onreadystatechange = function (response) {
        if (xhr.readyState === 4) {
            if (xhr.status == 200) {
                console.log(xhr.response);
            }else{

            }
           
        }
    };


}


function validatePassword(input, FormGrup,){
    var GroupPassword = document.getElementById(FormGrup);
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    var Messange = document.getElementById(FormGrup+'Message');
    if(input.value.length > 8){
        if (strongRegex.test(input.value)) {
            Messange.innerHTML = "";
            GroupPassword.classList.remove("form_validate_error");
            GroupPassword.classList.add("form_validate_success");
            P3Word = input.value;
        }else{
            Messange.innerHTML = "La contraseña debe incluir mayusculas y minusculas, algun numero y un caracter especial";
            GroupPassword.classList.remove("form_validate_success");
            GroupPassword.classList.add("form_validate_error");
        }
    }else{
        Messange.innerHTML = "La contraseña debe tener mas de 8 Caracteres";
        GroupPassword.classList.remove("form_validate_success");
        GroupPassword.classList.add("form_validate_error");
    }
}

function validatePasswordConfirmate(input, FormGrup){
    var GroupPassword = document.getElementById(FormGrup);
    var Messange = document.getElementById(FormGrup+'Message');
    if (P3Word != null) {
        if(input.value == P3Word){
            Messange.innerHTML = "";
            GroupPassword.classList.remove("form_validate_error");
            GroupPassword.classList.add("form_validate_success")
        }else{
            Messange.innerHTML = "La contraseña no coincide";
            GroupPassword.classList.remove("form_validate_success");
            GroupPassword.classList.add("form_validate_error");
        }
    }else{
        GroupPassword.classList.remove("form_validate_success");
        GroupPassword.classList.add("form_validate_error");
    }
}


