<?php

require_once "./EntityAbstract.php";

// Model || Entity
 class UsuarioEntity extends EntityAbstract {
    public $nomeUsuario;
    public $email;
    public $status = true;
    public $cadastroPreenchido = false;

    public function __construct(BancoDados $banco)
    {
        parent::__construct($banco);
        $this->tabelaNome = "usuario";
    }

 }
