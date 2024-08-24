<?php

    include "Usuario.php";
    include "dados/Usuario.php";

    use POO\Usuario as UsuarioRaiz; #esse as é tipo um apelido
    use POO\dados\Usuario AS UsuarioDados;

    $obj = new UsuarioRaiz(); #isso causuria um erro de cógigo, por ter os mesmos nomes, por isso utilizamos os NAMESPACES
    var_dump($obj);
    $obj2 = new UsuarioDados();