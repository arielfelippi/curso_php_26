<?php

define("QUEBRAR_LINHA", "<br>");

interface AnimaisInterface {
    public function emitirSom();
}

abstract class Animais implements AnimaisInterface {
     public $nome;

     public function emitirSom() {
        return "ola mundo!"; // so quando nao implementei nas classes filhas vai executar esse.
     }
}

class Cachorro extends Animais {

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "O {$this->nome} diz: Au au!" . QUEBRAR_LINHA;
    }
}

class Gato extends Animais {

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "O {$this->nome} diz: Miau miau!" . QUEBRAR_LINHA;
    }
}

class Papagaio extends Animais {

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "O {$this->nome} diz: Olá loro!" . QUEBRAR_LINHA;
    }
}

$cachorro = new Cachorro("Caramelo");
echo $cachorro->emitirSom();

$gato = new Gato("Bigode");
echo $gato->emitirSom();

$papagaio = new Papagaio("Rico");
echo $papagaio->emitirSom();
