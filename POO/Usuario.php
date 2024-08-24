<?php

namespace POO;
class Usuario{
    private $nome = "Alice";

    public function exibirNome(){
        echo $this->nome;
    }
}