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

// Tabuada 5
$numero = 5;
echo "<br>Tabuada do $numero<br>";
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";


// Tabuada 6
$numero = 6;
echo "<br>Tabuada do $numero<br>";
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

// Aritmetica
echo "<br>Calcular a Média Aritmetica.<br>";
$valor1 = 10;
$valor2 = 20;
$valor3 = 30;

$mediaAritmetica = ($valor1 + $valor2 + $valor3) / 3;
echo "<br>A Média é: $mediaAritmetica<br>";

// Ponderada
echo "<br>Calcular a Média Ponderada.<br>";
$prova1 = 10; // 3
$prova2 = 5; // 1.5
$prova3 = 7; // 3.2

$peso1 = 3;
$peso2 = 3;
$peso3 = 4;

$mpNumerador = ($prova1 * $peso1) + ($prova2 * $peso2) + ($prova3 * $peso3);
$mpDenominador = $peso1 + $peso2 + $peso3;

$mediaPonderada = $mpNumerador / $mpDenominador;
echo "<br>A Média é: $mediaPonderada<br>";

// Harmonica
echo "<br>Calcular a Média Harmonica.<br>";
$prova1 = 2;
$prova2 = 3;
$prova3 = 5;
$prova4 = 6;
$prova5 = 9;

$quantidadeProvas = 5; // n
$mhDenominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3) + (1 / $prova4) + (1 / $prova5);
$mediaHarmonica = round($quantidadeProvas / $mhDenominador, 2);
echo "<br>A Média é: $mediaHarmonica<br>";

// Calcular o volume de uma esfera com raio de 5cm.
// Dicas: Elevar ao cubo N³ -> 2 ** 3 = 8. PI = 3.14
// Formula: 4/3 * PI * R ao cubo.
$raio = 5;
CONST PI = 3.14;
$raioAoCubo = $raio ** 3;
$fracao = 4/3;
$volumeEsfera = $fracao * PI * $raioAoCubo;
echo "<br>O volume da Esfera é: $volumeEsfera<br>";


// Calcular a Area de um triangulo que tenha uma base de 8cm
// e sua altura de 6cm.
$base = 8;
$altura = 6;
$areaTriangulo = ($base * $altura) / 2;
echo "<br>A area do triangulo é: $areaTriangulo<br>";


// Calcular quantos segundos tem em 2 horas e 30 minutos.
$horas = 2;
$minutos = 30;
$minutosParaSegundos = 30 * 60; // 1800

$horasParaMinutos = 2 * 60; // 120
$horasSegundos = $horasParaMinutos * 60; // 7200

$totalEmSegundos = $horasSegundos + $minutosParaSegundos;  // 7200 + 1800 = 9000
echo "<br>O Total em segundos é: $totalEmSegundos<br>";


// Calcular IMC de uma Pessoa. Podem usar quaisquer valores.
$peso = 70;
$altura = 1.88;
$imc = round( $peso / ($altura ** 2), 2 );
echo "<br>O IMC é: $imc<br>";


// Aplicar a formula de Bhaskara para a seguinte equação do segundo grau:
// $a = 1; $b = -3; $c =-4;
// sqrt -> pow -> ** = potenciaciao
$a = 1; 
$b = -3; 
$c =-4;

$delta = ($b ** 2) - (4 * $a * $c); // OU
$delta = ($b * $b) - (4 * $a * $c);

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);
echo "<br>O X1 é: $x1 e o X2 é: $x2<br>";

// Converter graus Celsius para Fahrenheit. 35ºC -> ?ºF
$celsius = 35;
$fahrenheit = ($celsius * 9/5) + 32;
echo "<br>A temperatura $celsius ºC em graus Fahrenheit é: $fahrenheit ºF <br>";

// Converter graus Fahrenheit para Celsius. 95ºF -> ?ºC (35).
$f = 95;
$grausFah = $f -32;
$celsius = $grausFah / 1.8;
echo "<br>A temperatura $fahrenheit ºF em graus Celsius é: $celsius ºC <br>";

// Converter graus Celsius para Kelvin. 35ºC -> ?ºK.
$celsius = 35;
$kelvin = $celsius + 273.15;
echo "<br>A temperatura $celsius ºC em graus kelvint é: $kelvin ºK <br>";


// Converter graus Kelvin para Celsius. ?ºK -> 35ºC.
$kelvin = 35;
$celsius = $kelvin - 273.15;
echo "<br>A temperatura $kelvin ºK em graus Celsius é: $celsius ºC <br>";

/*
$soma = 2;
$soma += 5; // 7
1 == 1
2 != 3
1 < 2 
3 > 2
0 <= 1
6 >= 6
$valor1 >= $valor2 //V
6 >= 7
$valor1 >= $valor2 //F
7 >= 6
$valor1 >= $valor2 //V

E
&&
$tenhoDinherio && $tenhoVontadeTomarCafe
OU 
||
$tenhoDinherio || $ganheiDinheiro

Tabela verdade
V V == V
V F == F
F V == F
F F == F(v)
*/

$tenhoDinherio = true;
$tenhoVontadeTomarCafe = true;

if ($tenhoDinherio && $tenhoVontadeTomarCafe) {
    echo "vou tomar café<br>";
} else if ($tenhoDinherio && !$tenhoVontadeTomarCafe) {
    echo "vou comprar chocolate<br>";
} else {
    echo "nao tenho vontade de nada<br>";
}

$soma = 10 + 10;
