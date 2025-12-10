<?php

/* Tipos Primitivos
Int | Integer == 1, 2, 3...
Float | Double == 1.0, 2.0, 3.0...
String  | Char-Character == "Oi", 'o'...
*/


$texto = ""; // String vazia

// Tipos compostos|Coleção: Array | Vetor
$numeros = array(); // array vazio
$numeros = []; // array vazio

$numero = 10;
$numero = 11;


$numeros = [10, 1, 12, 5.5, 52.99,  "Infoserv"]; // Tam: 6
//          0,  1,  2,  3,     4,    5

$contador = [];

for($a = 0; $a <= 10; $a++) {
    // $contador[0] = 0;
    // $contador[$a] = $a;
    // array_push($contador, $a);
    $contador[] = $a;
}

echo "<br> implode contador:<br>";
echo implode(", ", $contador);

// $i = 0;

// while($i < 6) {
//     echo $numeros[$i] . "<br>";
//     $i++;
// }

// $i = 0;

// do {
//     echo $numeros[$i] . "<br>";
//     $i++;
// } while($i < 6);

/**
 *  Fazer o mesmo exercicio utilizando FOR e WHILE.
 * Exercicio: Encontrar os 5 primeiros numeros Primos.
 * Primos: 3, 5, 7, 11, 13.
 * Salvar os numeros primos encontrados em um Array|Vetor.
 * Após ter encontrado os 5 primos, em um FOR exibir os mesmos(Primos).
 */

$contPrimos = 0;
$numeroAvaliado = 3;
$salvarPrimos = [];

for ($numeroAvaliado = 3; $contPrimos  < 5; $numeroAvaliado++) {
    
    $antecessor = $numeroAvaliado -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

        $restoDivisao = $numeroAvaliado % $divisor; // 7 % 2 
        $ehDivisaoExata = $restoDivisao == 0;

        if ($ehDivisaoExata) {
            $ehPrimo = false;
            break;
        }
    
    } // Fim FOR
    
    if($ehPrimo == true){
        // array_push($salvarPrimos, $numeroAvaliado);
        $salvarPrimos[] = $numeroAvaliado;
        $contPrimos++;
    }
}  // Fim FOR

echo "<br>Primos no array:<br>";

for ($i = 0; $i < 5 ; $i++) {
    echo $salvarPrimos[$i] . "<br>";
}

// echo "<br> implode contador:<br>";
// echo implode(", ", $salvarPrimos);

/**
 * Somar arrays:
 * $arrayInicio = [5, 10, 50];
 * $arrayFim = [10, 90, 30];
 * Resultado esperado:
 * $arraySoma[15, 100, 80];
 */

$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];
$arraySoma = [];

for($i = 0; $i < 3; $i++) {
    $arraySoma[$i] = $arrayInicio[$i] + $arrayFim[$i];
}

echo "<br>Soma dos vetores:<br>";
echo implode(", ", $arraySoma);

/**
 * Multiplicar arrays:
 * $arrayInicio = [5, 10, 8];
 * $arrayFim = [10, 100, 3];
 * Resultado esperado:
 * $arrayMultiplicado[50, 1000, 24];
 */

$arrayInicio = [5, 10, 8];
$arrayFim = [10, 100, 3];
$arrayMultiplicado = [];

for($i = 0; $i < 3; $i++) {
    $arrayMultiplicado[$i] = $arrayInicio[$i] * $arrayFim[$i];
}

echo "<br>A multiplicação dos vetores:<br>";
echo implode(", ", $arrayMultiplicado);

/**
 * Dada uma palavra informada pelo usuario,
 * verificar se a mesma forma um palíndromo.
 * 
 * Ex.: ana, subi no onibus, kaiak, natan.
 * 
 * Dica: Um for dentro do outro.
 */

echo "<br>Palíndromo:<br>";

$palavra = "subinoonibus";
$tamanho = strlen($palavra) - 1;
$palavraInvertida = "";

for($i = $tamanho; $i >= 0; $i--) {
    $palavraInvertida .= $palavra[$i];
}

/**
 * 0 == "0" true
 * 0 === "0" false
 */
$ehPalindromo = $palavra === $palavraInvertida; 

if ($ehPalindromo) {
    echo "<br>A palavra $palavra é palindromo!<br>";
} else {
    echo "<br>A palavra $palavra NÃO é palindromo!<br>";
}


/**
 * Contar quantas vogais existem em um frase ou palavra.
 * 
 * $vogais = ['a', 'e', 'i', 'o', 'u'];
 * $vogalMinuscula = strtolower($palavra[$i]);
 * 
 * $existeVogal = in_array($vogalMinuscula, $vogais);
 * 
 * Ex.: 
 * $palavra = "infoserv";
 * $palavra = "infosErv";
 * 
 * Saida esperada: 3 vogais.
 */


/**
 * Contar quantas vogais existem em um frase ou palavra.
 * Totalizando a quantidade de cada uma, ou seja, quantos A, quantos E...
 */

