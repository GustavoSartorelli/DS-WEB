//Aparecer Bem-Vindo(a) + nome
    function sauldar(){
        var mensagem = document.getElementById("nome").value;
        document.getElementById("mensagem").innerHTML = "Bem-Vindo(a)" + " " + mensagem;
    }

//Calculo se é Par ou Impar
    function calcular(){
        var valor = document.getElementById("numero").value;
        var numero = parseInt(valor);
        var resultado = numero % 2 === 0 ? "Par" : "Ímpar";
        document.getElementById("resultado").innerHTML = numero + " é um numero: " + resultado;
    }

//Letra maiusculas
    function transformar() {
        var palavra = window.document.getElementById("nome1").value;
        var resultado = palavra.toUpperCase();
        document.getElementById("res").innerText = resultado;
    }

//Receber valor e uma porcentagem
    function verificacaodoNumero2() {
        var valor1 = document.getElementById("numero2").value;
        var valorPorcentagem = document.getElementById("porcentagem").value;
        var numero2 = parseFloat(valor1);
        var porcentagem = parseFloat(valorPorcentagem);
    
    if (isNaN(numero2)){
        document.getElementById("porcentagem").innerHTML = "Por favor, insira um número válido.";
        return;
    }
    var resultado2 = (numero2 * porcentagem / 100);
        document.getElementById("resultado2").innerHTML = numero2 + " sendo acrecido em " + porcentagem + "% é de " + (numero2 + resultado2);
    }