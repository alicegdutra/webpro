<?php

class Animal{

    protected $none;
    protected $raca;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setRaca(raca){
        $this->raca = $raca;
    }

    public function getRaca(){
        return $this->raca;
    }

}

//herança - herda de animal

class Cachorro extends Animal{

}