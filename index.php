<?php
// $_GET
// $_POST
// $_REQUEST
// empty() => falsy(null, undefined, [], {}, 0, '0' e false) TRUE
// isset() => true || false se a parametro existe.
// ?rota=criar
// &id=5
// http://localhost/curso_php_26/
// http://localhost/curso_php_26/?rota=obter-todos (POST)[200 ids]
// http://localhost/curso_php_26/?rota=criar
// http://localhost/curso_php_26/?rota=atualizar&id=5
// http://localhost/curso_php_26/?rota=criar&nome=joao&idade=18

require_once "./bootstrap.php";

$dados = $_REQUEST;

$irParaListagem = empty($dados) || !isset($dados["rota"]);

if ($irParaListagem) {

    $usuario = $usuarioEntity->obterTodos();

    foreach($usuario as $idx => $valor) {
        echo "$valor->id - $valor->nome <br>";
    }

    return;
}

$rota = $dados["rota"];

if ($rota == "listar") {
    echo "estou na listar";
    return;
}

if ($rota == "editar") {
    echo "estou na editar";
    return;
}

if ($rota == "criar") {
    // echo $dados["nome"] . "<br>";
    // echo $dados["idade"]. "<br>";
    echo "estou na criar". "<br>";
    return;
}

if ($rota == "atualizar") {
    echo "estou na atualizar";
    return;
}

if ($rota == "excluir") {
    echo "estou na excluir";
    return;
}
 