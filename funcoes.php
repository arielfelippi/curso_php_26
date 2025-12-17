<?php

// 2 ** 3; // ** -> pow -> potenciacao 2³.

const SESSENTA = 60;

// $nome = "Bruno";
// $idade = 18;
// $texto = "Infoserv";

// function imprimeTexto($texto, $nome = "", $idade = 0) {
//     echo $texto;
//     echo "<br>";
//     echo $nome;
//     echo "<br>";
//     echo $idade;
// }

// imprimeTexto($texto, $nome, $idade);

// // Calcular quantos segundos tem em 2 horas e 30 minutos.
// $horas = 2;
// $minutos = 30;
// $minutosParaSegundos = 30 * 60; // 1800

// $horasParaMinutos = 2 * 60; // 120
// $horasSegundos = $horasParaMinutos * 60; // 7200
function calcularSegundosEmHoras($horas) {
    $relogio = explode(":", $horas);
    $hora = $relogio[0];
    $minutos = $relogio[1];
    $segundos = $relogio[2];

     $horasParaMinutos = $hora * SESSENTA;
     $horasSegundos = $horasParaMinutos * SESSENTA;
     $minutosParaSegundos = $minutos * SESSENTA;

     $totalHoraEmSegundos = $horasSegundos + $minutosParaSegundos + $segundos;

     echo "<br>";
     echo "A hora informada: $horas tem $totalHoraEmSegundos segundos.";
     echo "<br>";
}

// $horas = "01:00:00";

$horas = Date("H:i:s");

calcularSegundosEmHoras($horas);


function ehDivisaoExata($numero, $divisor) {
    $restoDivisao = $numero % $divisor;
    $ehDivisaoExata = $restoDivisao == 0;

    return $ehDivisaoExata; //  true ou false
}

function verificarSeEhPar($numero) {
    $ehPar = ehDivisaoExata($numero, 2);

    if ($ehPar) {
        echo "O numero informado $numero é par.";
    } else {
        echo "O numero informado $numero É impar.";
    }
}

/**
 *  Fazer o mesmo exercicio utilizando FOR e WHILE.
 * Exercicio: Encontrar os 5 primeiros numeros Primos.
 * Primos: 3, 5, 7, 11, 13.
 */
$numeroAvaliado = 3;
calcularPrimos($numeroAvaliado);

function calcularPrimos($numeroAvaliado) {
    $contPrimos = 0;
    $antecessor = $numeroAvaliado -1;

    for ($divisor = 2; $divisor <= $antecessor; $divisor++) {

        if ($contPrimos == 5) {
            break;
        }

        $ehDivisaoExata = ehDivisaoExata($numeroAvaliado,  $divisor);

        if ($ehDivisaoExata) {
            $numeroAvaliado++;
            $antecessor = $numeroAvaliado -1;
            $divisor = 1;
            continue;
        }

        if ($divisor == $antecessor) {
            echo "O numero $numeroAvaliado é primo!<br>";
            $numeroAvaliado++;
            $antecessor = $numeroAvaliado -1;
            $contPrimos++;
            $divisor = 1;
        }
    }
}
