//Lista de Exercícios 1 – Funções em JavaScript

//1 - Escreva em JavaScript um programa que mostre na tela a mensagem “Bom dia, Mundo!!!".
console.log("Bom Dia, Mundo!!!")
alert("Bom Dia, Mundo!!!")

//2 - Escreve em JavaScript um programa que receba nome e sobrenome de uma pessoa separadamente e depois mostre eles juntos.
nome1 = prompt("Digite seu primeiro nome")
nome2 = prompt("Digite seu sobrenome")
alert(nome1 + " " + nome2)

//3 - Escreva em JavaScript um programa que efetue as 4 operações aritméticas em sequência: Adição, Subtração, Multiplicação e Divisão (fazer variáveis diferentes para todas as operações)
console.log("Digite a seguir numeros para fazer a adição")
alert("Digite a seguir numeros para fazer a adição")
var adicao1 = Number.parseInt(prompt("Digite o primeiro numero"))
var adicao2 = Number.parseInt(prompt("Digite o segundo numero"))
alert(adicao1 + adicao2)

console.log("Digite a seguir numeros para fazer a subtração")
alert("Digite a seguir numeros para fazer a subtração")
var subtracao1 = Number.parseInt(prompt("Digite o primeiro numero"))
var subtracao2 = Number.parseInt(prompt("Digite o segundo numero"))
alert(subtracao1 - subtracao2)

console.log("Digite a seguir numeros para fazer a multiplicação")
alert("Digite a seguir numeros para fazer a multiplicação")
var multiplicação1 = Number.parseInt(prompt("Digite o primeiro numero"))
var multiplicação2 = Number.parseInt(prompt("Digite o segundo numero"))
alert(multiplicação1 * multiplicação2)

console.log("Digite a seguir numeros para fazer a divisão")
alert("Digite a seguir numeros para fazer a divisão")
var divisao1 = Number.parseInt(prompt("Digite o primeiro numero"))
var divisao2 = Number.parseInt(prompt("Digite o segundo numero"))
alert(divisao1 / divisao2)

//4 - Escreva em JavaScript um programa que retorne o cubo de um número fornecido pelo usuário.
console.log("Digite a seguir numeros para fazer ao cubo")
alert("Digite a seguir numeros para fazer ao cubo")
var cubo1 = Number.parseInt(prompt("Digite o primeiro numero"))
var cubo2 = Number.parseInt(prompt("Digite o segundo numero"))
alert(cubo1 ** cubo2)

//5 - Escreva em JavaScript um programa que realize a conversão de uma temperatura fornecida em graus Fahrenheit (F) para Celsius (C).
console.log("Digite a seguir numeros para realizar a conversão de uma temperatura")
alert("Digite a seguir numeros para realizar a conversão de uma temperatura")
var pnumero = Number.parseInt(prompt("Digite a temperatura"))
alert(pnumero - 32) = resultado
alert(resultado * 0,5556)

//6 - Escreva em JavaScript um programa que informe o retorno de um investimento (montante) com base nos valores do capital inicial, tempo em meses e taxa de juros mensal, fornecidos pelo usuário.
var capital = Number.parseInt(prompt("Digite Capital inicial investido"))
var taxa = Number.parseInt(prompt("Digite a taxa em porcentagem"))
var tempo = Number.parseInt(prompt("Digite o tempo investido em meses"))

var Resul = ((capital * (1+(taxa/100)) ** tempo))
alert (Resul.toFixed(2))
