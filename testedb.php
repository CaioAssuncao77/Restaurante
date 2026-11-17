<?php

require __DIR__ ."/config/Database.php";
require __DIR__ ."/models/prato.php";
require __DIR__ ."/models/bebida.php";
require __DIR__ ."/models/sobremesa.php";

use RestauranteLegal\Config\Database;
use RestauranteLegal\Models\Prato;
use RestauranteLegal\Models\Bebida;
use RestauranteLegal\Models\Sobremesa;

$meuBancoDeDados = new Database(); //criando objeto database
$minhaConexao = $meuBancoDeDados->conectar(); //chamando metodo conectar do Database


if(is_string($minhaConexao)) {
    echo$minhaConexao;
}else {
   // echo "Conectou...";
}


$meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 46.99);
$minhaBebida = new Bebida(1, "Sucuzinho", 500, false , 50.00);
$minhaSobremesa = new Sobremesa(1, "Bolos de Chocolate", "Delicioso Bolo de chocolate!", 20 );
// var_dump($meuPrato);

echo $meuPrato->getPratoHTML();
echo "<br><br>";
echo $minhaBebida->getBebidaHTML();  
echo "<br><br>";
echo $minhaSobremesa->getSobremesaHTML();
