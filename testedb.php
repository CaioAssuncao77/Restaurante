<?php

require __DIR__ ."/config/Database.php";
require_once __DIR__ . "/models/bebida.php";
require_once __DIR__ . "/models/prato.php";
require_once __DIR__ . "/models/sobremesa.php";

use RestauranteLegal\Config\Database;
use RestauranteLegal\Models\Prato;
use RestauranteLegal\Models\Bebida;
use RestauranteLegal\Models\Sobremesa;

$meuBancoDeDados = new Database(); //criando objeto database
$minhaConexao = $meuBancoDeDados->conectar(); //chamando metodo conectar do Database

if(is_string($minhaConexao)) {
    echo $minhaConexao;
}else {
   // echo "Conectou...";
}

// Criando os objetos
echo "======= Primeiro Prato =======<br><br>";

try {
    $meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 46.99);

    echo $meuPrato->getPratoHTML();
}catch(\Exception $th){
    echo $th->getMessage();
}
echo "<br><br>";
echo "======= Primeira Sobremesa =======<br><br>";

try {
    $minhaSobremesa = new Sobremesa(1, "Bolos de Chocolate", "Delicioso Bolo de chocolate!", 20.00);
    echo $minhaSobremesa->getSobremesaHTML();

}catch(\Exception $th){
    echo $th->getMessage();
}
// Exibindo os objetos
echo "<br><br>";

echo "======= Primeira Bebiba =======<br><br>";
try {
    $minhaBebida = new Bebida(1, "Sucozinho", 500, false, 10.00);
    echo $minhaBebida->getBebidaHTML();

}catch(\Exception $th){
    echo $th->getMessage();
}
echo "<br><br>";
// Testando Prato
echo "======= Segund Prato =======<br><br>";

try {
    $meuSegundoPrato = new Prato(2, "Lasanha", "Deliciosa Lasanha a Bolonhesa", 10);
    echo $meuSegundoPrato->getPratoHTML();
}catch(\Exception $th){
    echo $th->getMessage();
}

echo "<br><br>";

echo "======= Segunda Bebida =======<br><br>";
// Testando Bebida

try {
    $minhaSegundaBebida = new Bebida(2, "Refrigerante", 350, false, 7.50);
    echo $minhaSegundaBebida->getBebidaHTML();

}catch(\Exception $th){
    echo $th->getMessage();
}

echo "<br><br>";

echo "======= Segunda Sobremensa =======<br><br>";

try {
    $minhaSegundaSobremesa = new Sobremesa(2, "Brigadeiro", "Brigadeiro de chocolate", 10.00);


    echo $minhaSegundaSobremesa->getSobremesaHTML();

    // Aplicando desconto de 10%
    $minhaSegundaSobremesa->aplicarDesconto(10);

    echo "<br><br>Após o desconto:<br>";
    echo $minhaSegundaSobremesa->getSobremesaHTML();

}catch(\Exception $th){
    echo $th->getMessage();
}

