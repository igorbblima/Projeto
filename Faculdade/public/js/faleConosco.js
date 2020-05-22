function validacao() {
    var formulario = document.getElementById("formUserContato");
    var nome =  formulario.nome;
    var email = formulario.email;
    var  assunto  = formulario.assunto;
    var mensagem = formulario.mensagem;

    if(nome.value =="") {
        alert("Digite seu Nome Completo");
        return false;
    }
    if(email.value.indexOf("@") == -1 || email.value == "" || email.value.indexOf(".") == -1 ) {
        alert("Informe um E-mail Válido");
        return false;
    }
    if(assunto.value =="") {
        alert("Digite o Título do Assunto");
        return false;
    }
    if(mensagem.value =="") {
        alert("Digite Sua Mensagem");
        return false;
    }
}