function validacao() {
    var formulario = document.getElementById("formPesquisa");
    var campoPesquisa = formulario.campoPesquisa;


    if(campoPesquisa.value =="") {
        alert("Digite o Nome de Algum produto");
        return false;
    }
}