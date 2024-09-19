<?php
    class Fornecedor
    {public function __construct(private string $razao_social = "", private string $nome_fantasia = "", private string $cnpj = "",
         private string $telefone = "", private array $produto = array()){}

    public function getRazao_social()
        { return $this->razao_social;}

    public function getNome_fantasia()
        { return $this->nome_fantasia;}

    public function getCpnj()
        { return $this->cnpj;}
        
    public function getTelefone()
        { return $this->telefone;}

    }

?>