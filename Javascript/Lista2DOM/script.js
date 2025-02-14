    //Idade se é maior de idade ou não
    function usuario(){
        var idade = document.getElementById("idade").value;
        if(idade >= 18){
            document.getElementById("res").innerText = "Você é maior de idade";
        }else{
            document.getElementById("res").innerText = "Você é menor de idade";
        }
    }

    //Numero positivo, negativo ou zero
    function Numero(){
        var numero1 = document.getElementById("numero1").value;
        if(numero1 == 0){
            document.getElementById("result").innerText = "Numero é igual a zero";
        }else if(numero1 > 0){
            document.getElementById("result").innerText = "Numero é positivo";
        }else if(numero1 < 0){
            document.getElementById("result").innerText = "Numero é negativo";
        }
    }

    //Usuario e Senha, login ou erro
    function usuarioEsenha(){
        var nomeUsuario = document.getElementById("nomeUsuario").value;
        var senhaUsuario = document.getElementById("senhaUsuario").value;
        if(nomeUsuario === "admin" && senhaUsuario === "12345"){
            document.getElementById("resultado").innerText = "Login correto";
        }else{
            document.getElementById("resultado").innerText = "Login ou senha incorretas";
        }
    }

    //Usuario inserir dois numeros e uma operação
    function operacao1(){
        var numero01 = document.getElementById("priNumero").value;
        var numero01 = Number.parseFloat(numero01);
        var numero02 = document.getElementById("segNumero").value;
        var numero02 = Number.parseFloat(numero02);

        const ope = document.getElementById("operacao").value;

        var resultado = "";

        if(ope == "+"){
            resultado = numero01 + numero02;
        }else if(ope == "-"){
            resultado = numero01 - numero02;
        }else if(ope == "*"){
            resultado = numero01 * numero02;
        }else if(ope == "/"){
            resultado = numero01 / numero02;
        }
        document.getElementById("resul").innerHTML = resultado;
    }