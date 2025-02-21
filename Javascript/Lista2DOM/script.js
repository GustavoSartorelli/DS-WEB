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
        var senhaUsuario = document.getElementById("senhausuario").value;
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

    //Crie um programa que peça ao usuário para inserir um número e informe se é par ou ímpar.

    function CalculoImparpar(){
        var valor = document.getElementById("ImparPar").value;
        var ImparPar = parseInt(valor);
        var resultado = ImparPar % 2 === 0 ? "Par" : "Ímpar";
        document.getElementById("resultadoImparPar").innerHTML = ImparPar + " é um numero " + resultado;
    }

    //Crie um programa que solicite ao usuário três números e informe qual deles é o maior.
    function verificarMaior(){
        var numero1 = Number(document.getElementById("PriNumero").value);
        var numero2 = Number(document.getElementById("SegNumero").value);
        var numero3 = Number(document.getElementById("TerNumero").value);

        var resultado = "";

        if(numero1 > numero2 && numero1 > numero3){
            resultado = numero1;
        }else if(numero2 > numero3 && numero2 > numero1){
            resultado = numero2;
        }else{
            resultado = numero3;
        }
        document.getElementById("resultadoMaior").innerHTML = resultado;
    }

    //Crie um programa que peça ao usuário inserir os comprimentos de três lados de um triângulo e determine se é um triângulo válido
    function calculoTri(){
        var lado1 = Number(document.getElementById("lado1").value);
        var lado2 = Number(document.getElementById("lado2").value);
        var lado3 = Number(document.getElementById("lado3").value);

    
        if((lado1 + lado2) > lado3 && (lado1 + lado3) > lado2 && (lado2 + lado3) > lado1){
           if(lado1 == lado2 && lado1 == lado3){
            document.getElementById("resultadoTriangulo").innerText = "triangulo é equilatero"
           }else if(lado1 == lado2 && lado1 != lado3){
            document.getElementById("resultadoTriangulo").innerText = "triangulo é isoceles"
           }else{
            document.getElementById("resultadoTriangulo").innerText = "triangulo é escaleno"
           }
        }else{
            document.getElementById("resultadoTriangulo").innerText = "triangulo é valido";
        }
    }