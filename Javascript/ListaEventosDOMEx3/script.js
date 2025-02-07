function sauldar(){
    var mensagem = document.getElementById("nome").value;
    document.getElementById("mensagem").innerHTML = "Bem-Vindo(a)" + " " + mensagem;
}

function calcular(){
    var numero1 = document.getElementById(numero1).value;
    var numero2 = document.getElementById(numero2).value;

    console.log(typeof numero1);
    var numero1 = Number.parseInt(numero1);

    var resultado = numero1 % 2;
    console.log(resultado)
}