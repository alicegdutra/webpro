<?php
#classe estática publica para ser acessível
#this - atributos não estáticos
#self - é o this para atributos estáticos e o :: substitui o ->

class Contador {
    public static $contador = 0;

    public static function incremento(){
        self::$contador++;
    }

    public static function decremento(){
        self::$contador--;
    }
}

Contador::incremento();
Contador::incremento();
Contador::decremento();
echo Contador::$contador;