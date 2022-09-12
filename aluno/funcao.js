class Aluno {
    constructor(nome, notaI, notaII, notaIII) {
        this.nome = nome;
        this.notaI = notaI;
        this.notaII = notaII;
        this.notaIII = notaIII;
    }
    media() {
        return (this.notaI+this.notaII+this.notaIII)/3;
    }

    set _setNome(nome) {
        this.nome = nome;
    }
    set _setNotaI(notaI) {
        this.notaI = notaI;
    }
    set _setNotaII(notaII) {
        this.notaII = notaII;
    }
    set _setNotaIII(notaIII) {
        this.notaIII = notaIII;
    }

    get _nome() {
        return this.nome;
    }
    get _notaI() {
        return this.notaI;
    }
    get _notaII() {
        return this.notaII;
    }
    get _notaIII() {
        return this.notaIII;
    }
}

var alunos = [];

function fIncluirAluno(nome, notaI, notaII, notaIII) {
    let valuno = new Aluno(nome, notaI, notaII, notaIII);
    alunos.push(valuno);
    return valuno.media();
}

function fListarAlunos(separa = ' : ', separadorlinha = ";") {
    let retorno = "";
    alunos.forEach(function(valuno, i ){
        retorno += '<strong ondblclick="fApagaAluno('+i+')">&nbsp;'+i+'&nbsp;</strong>'+separa + valuno._nome + separa + valuno._notaI + separa + valuno._notaII + separa + valuno._notaIII + separa + valuno.media() + separadorlinha;
    });
    return retorno;
}
function fLimparAlunos() {
    alunos = [];
}
function fApagaAluno(i) {
    alunos.splice(i,1);
}
function fContaAlunos() {
    return alunos.length;
}