function mostramsg(msg) {
    $("#dMsg").text(msg);
    setTimeout(() => {
        $("#dMsg").text("");
    }, 3000);
}

function fValidaEmail(vemail) {    
    var re = /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/;
    return(re.test(vemail))
}

function fValidaFone(vfone) {    
    var re = /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/;
    return(re.test(vfone))
}

function fValida() {
    const vnome=$("#iNome").val();
    const vemail=$("#iEmail").val();
    const vfone=$("#iFone").val();
    const vestado=$("#sEstado").val();
    const vcidade=$("#sCidade").val();

    let valido = true;

    if (vnome == "") {
        mostramsg("Nome é Obrigatório");
        $("#iNome").focus();
        valido = false;
    } else if (!fValidaEmail(vemail)) {
        mostramsg("e-mail Inválido");
        $("#iEmail").focus();
        valido = false;
    } else if (!fValidaFone(vfone)) { 
        mostramsg("Fone Inválido");
        $("#iFone").focus();
        valido = false;
    } else if (vestado == "00") { 
        mostramsg("Estado Inválido");
        $("#sEstado").focus();
        valido = false;
    } else if (vcidade == "00") { 
        mostramsg("Cidade Inválido");
        $("#sCidade").focus();
        valido = false;
    }
    return(valido);
}

$(document).ready(function(){
    $("#fInteressados").submit(function(){
        return fValida();
    })  

    $("#sEstado").change(function(){
        sigla = $("#sEstado").val();
        acao = "consulta_cidades.php?estado="+sigla;
        $("#sCidade").empty();
        $("#sCidade").append("<option value=\"00\">Selecionar</option>");

        $.get(acao, function(opcoes, status){
            $("#sCidade").append(opcoes);
        });  
    })
});
