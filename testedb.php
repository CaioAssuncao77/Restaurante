<?php

require __DIR__ ."/config/Database.php";
require __DIR__ ."/models/prato.php";

use RestauranteLegal\Config\Database;
use RestauranteLegal\Models\Prato;

$meuBancoDeDados = new Database(); //criando objeto database
$minhaConexao = $meuBancoDeDados->conectar(); //chamando metodo conectar do Database


if(is_string($minhaConexao)) {
    echo$minhaConexao;
}else {
   // echo "Conectou...";
}


$meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 46.99);

// var_dump($meuPrato);

echo $meuPrato->getPratoHTML();
    
