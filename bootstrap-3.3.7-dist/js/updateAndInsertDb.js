function registrarServico(idUsuario) {
    var ID_Area = document.getElementById("ID_Area").value;
    var Nome_Servico = document.getElementById("Nome_Servico").value;
    var Detalhe_Servico = document.getElementById("Detalhe_Servico").value;
    var ID_Usuario = idUsuario;
    $.ajax({
        type: 'POST',
        url: "http://localhost/caririservico/ControllerPerfil/cadastrarServicos",
        dataType: 'json',
        data: {
            ID_Area: ID_Area,
            Nome_Servico: Nome_Servico,
            Detalhe_Servico: Detalhe_Servico,
            ID_Usuario: ID_Usuario},
        success: function (r) {
            window.location.href = "http://localhost/caririservico/ControllerLogin/conferirLogin";
        }
    });
}

function alterarServico(idServico) {
    var ID_Area = document.getElementById("ID_Area2").value;
    var Nome_Servico = document.getElementById("Nome_Servico2").value;
    var Detalhe_Servico = document.getElementById("Detalhe_Servico2").value;
    var ID_Servico = document.getElementById("ID_Servico2").value;
    $.ajax({
        type: 'POST',
        url: "http://localhost/caririservico/ControllerPerfil/atualizarServico",
        dataType: 'json',
        data: {
            ID_Area: ID_Area,
            Nome_Servico: Nome_Servico,
            Detalhe_Servico: Detalhe_Servico,
            ID_Servico: ID_Servico},
        success: function (r) {
            window.location.href = "http://localhost/caririservico/";
        }
    });
}

function alterarDadosPessoais(ID_Usuario) {
    //Dados da coluna da esquerda
    var Nome_Usuario = document.getElementById("Nome_Usuario").value;
    var CPF = document.getElementById("CPF").value;
    var dataNascimento = document.getElementById("dataNascimento").value;
    var Telefone1 = document.getElementById("Telefone1").value;
    var Telefone2 = document.getElementById("Telefone2").value;
    if(document.getElementById("Sexo1").checked === true){
        var Sexo = 1;
    }else if(document.getElementById("Sexo2").checked === true){
        var Sexo = 2;
    }else if(document.getElementById("Sexo3").checked === true){
        var Sexo = 3;
    }
    
    //Dados da coluna da direita
    var CEP = document.getElementById("cep").value;
    var Rua = document.getElementById("rua").value;
    var Numero = document.getElementById("numero").value;
    var UF = document.getElementById("uf").value;
    var Bairro = document.getElementById("bairro").value;
    var Cidade = document.getElementById("cidade").value;
    var Complemento = document.getElementById("Complemento").value;
    
   $.ajax({
        type: 'POST',
        url: "http://localhost/caririservico/ControllerPerfil/atualizarDadosPessoais",
        dataType: 'json',
        data: {
            Telefone1: Telefone1,
            Telefone2: Telefone2,
            Nome_Usuario: Nome_Usuario,
            Data_Nascimento: dataNascimento,
            Sexo: Sexo,
            CPF: CPF,
            CEP: CEP,
            Rua: Rua,
            Numero: Numero,
            UF: UF,
            Bairro: Bairro,
            Cidade: Cidade,
            Complemento: Complemento,
            ID_Usuario: ID_Usuario},
        success: function (r) {
            window.location.href = "http://localhost/caririservico/";
        }
    });
}

function atualizarQualificacoes(id1, id2){
    var ID_Grau = document.getElementById("grauModal").value;
    var Nome_Curso = document.getElementById("Nome_CursoModal").value;
    var Instituicao = document.getElementById("instituicaoModal").value;
    var Duracao = document.getElementById("duracaoModal").value;
    var ID_Idioma = document.getElementById("ID_Idioma").value;
    var ID_Nivel = document.getElementById("Nivel").value;
    
     $.ajax({
        type: 'POST',
        url: "http://localhost/caririservico/ControllerPerfil/atualizarQualificacao",
        dataType: 'json',
        data: {
            ID_Grau: ID_Grau,
            Nome_Curso: Nome_Curso,
            Instituicao: Instituicao,
            Duracao: Duracao,
            ID_Idioma: ID_Idioma,
            ID_Nivel: ID_Nivel,
            ID_Usuario: id1,
            ID_Qualificacao: id2},
        success: function (r) {
            window.location.href = "http://localhost/caririservico/";
        }
    });
}