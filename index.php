<?php
/**
 * string 'texto qualquer' || 'A' || "A"
 * char || character 'A'
 * int || integer 23
 * float 23.8
 * double 23.8
 * decimal 23.8
 */

$aviao = "Boeing747";
$valor1 = 30;
$valor2 = 15;
$soma = $valor1 + $valor2; // 10 + 15 -> 25
// mesma coisa
// $soma = $soma + 3; // 28
// $soma +=3; // 28
// &nbsp; -> espaço no html

echo "A conta $valor1 + $valor2.<br>Soma é: $soma";
echo "<br>";

$valor1 = 15;
$valor2 = 26;
$subtracao = $valor1 - $valor2;
$subtracao = $subtracao - 3;
echo "Subtracao é: " . $subtracao;
echo "<br>";

$valor1 = 50;
$valor2 = 2;
$divisao = $valor1 / $valor2;
echo "A divisão de $valor1 por $valor2 é: " . $divisao;
echo "<br>";

$valor1 = 50;
$valor2 = 2;
$restoDivisao = $valor1 % $valor2;
echo "O resto da divisão de $valor1 por $valor2 é: " . $restoDivisao;
echo "<br>";

/**
 * Exercico 1:
 * Fazer a tabuada do 5, 6.
 * 
 * Exercicio 2:
 * calcular as médias: Aritmetica, Ponderada e Harmonica.
 */