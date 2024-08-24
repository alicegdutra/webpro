<?php

namespace POO\dados; //nomear de acordo com estrutura de classes

class Usuario{
    private $email = "alicegzdutra@gmail.com";

    public function exibirEmail(){
        echo $this->email;
    }
}