function validacao() {
    var formulario = document.getElementById("formUser");

    var inputN = formulario.inputN;              //Nome
    var inputEnd = formulario.inputEnd;          // Endereço
    var inputDN = formulario.inputDN;           // Data de Nascimento
    var inputT = formulario.inputT;             // Telefone
    var inputCPF = formulario.inputCPF;         // CPF
    var inputRG = formulario.inputRG;           //RG
    var inputE = formulario.inputE;             // E-mail
    var inputS = formulario.inputS;             //Senha

    
    if(inputN.value == "") {
        alert("Digite seu Nome");
        return false;
    }
    if(inputEnd.value == "") {
        alert("Informe seu Endereço Completo");
        return false;
    }
         if(inputDN.value =="") {
         alert("Informe Data de Nascimento");
        return false;
    }
    if(inputT.value == "") {
        alert("Digite um numero de telefône");
        return false;
    }
    if(inputCPF.value == "") {
        alert("Digite seu CPF");
        return false;
    }
    if(inputRG.value == "") {
        alert("Digite seu RG");
        return false;
    }
    if(inputE.value == "" || inputE.value.indexOf("@") == -1 || inputE.value.indexOf(".") == -1 ) {
        alert("Digite seu E-mail");
        return false;
    }

    if(inputS.value == "") {
        alert("Digite uma Senha");
        return false;
    }
}