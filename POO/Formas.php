<?php
//obriga implementação de metodos, assinatura de método
//IMPLEMENTS
//todos serão abstratos na interface, mas nem todo metodo sera abstrado na classe abstrata

interface Forma{
    public function area();
}

class Retangulo implements Forma {

    private $altura;
    private $base;

    public function area(){
        return $this->altura * $this->base;
    }
}