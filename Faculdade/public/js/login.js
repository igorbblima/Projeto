function validacao() {
    var formulario = document.getElementById("formUser");
    var email = formulario.email;
    var password = formulario.password;



    if(email.value.indexOf("@") == -1 || email.value == "" || email.value.indexOf(".") == -1 ) {
        alert("Informe um E-mail");
        return false;
    }

    if(password.value =="") {
        alert("Digite uma Senha");
        return false;
    }
}