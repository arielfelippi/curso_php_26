<?php

// CRUD - Create, Read, Update e Delete.
interface EntityInterface {
    public function criar();
    public function obter($id);
    public function obterTodos($filtros = "");
    public function atualizar($id);
    public function deletar($id);
}

// Model || Entity, Representa a tabela do banco na programacao.
abstract class EntityAbstract implements EntityInterface {
    public $id;
    public $criadoEm;
    public $atualizadoEm;
    public $usuarioAlteracao;
    public $tabelaNome;
    public $bancoDeDados;

    public function __construct(BancoDados $banco)
    {
        $this->bancoDeDados = $banco;
    }

    public function criar() {

    }
    
    public function obter($id) {
        $sql = "SELECT * FROM $this->tabelaNome WHERE id = $id";
        return $this->bancoDeDados->execQuery($sql);
    }
    
    public function obterTodos($filtros = "") {
        $sql = "SELECT * FROM $this->tabelaNome";
        return $this->bancoDeDados->execQuery($sql);
    }
    
    public function atualizar($id) {

    }
    
    public function deletar($id) {
        $sql = "DELETE FROM $this->tabelaNome WHERE id = $id";
    }
    
}
