function preencherModal(urlFoto,nUsuario,nServico,email,t1,t2,bairro,cidadeEstado,sexo){
    document.getElementById("urlFoto").src = urlFoto;
    document.getElementById("nomeUsuario").innerHTML = nUsuario;
    document.getElementById("nServico").innerHTML = 'Profissão: ' + nServico;
    document.getElementById("email").innerHTML = 'E-mail: ' + email;
    document.getElementById("t1").innerHTML = 'Telefone: ' + t1;
    document.getElementById("t2").innerHTML = 'Telefone: ' + t2;
    document.getElementById("bairroM").innerHTML = 'Bairro: ' + bairro;
    document.getElementById("cidadeEstado").innerHTML = cidadeEstado;
    if(sexo == 1){
        sexo = 'Masculino';
    }else if(sexo ==2){
        sexo = 'Feminino';
    }else{
        sexo = 'Outros';
    }
    document.getElementById("sexo").innerHTML = 'Sexo: ' + sexo;
}

function preencherModalEdicao(ID_Area,Nome_Area,Nome_Servico,Detalhe_Servico,ID_Servico){
    document.getElementById("setada").innerHTML = Nome_Area;
    document.getElementById("setada").value = ID_Area;
    document.getElementById("Nome_Servico2").value = Nome_Servico;
    document.getElementById("Detalhe_Servico2").value = Detalhe_Servico;
    document.getElementById("ID_Servico2").value = ID_Servico;
}