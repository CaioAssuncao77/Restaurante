<?php

require __DIR__ ."/config/Database.php";

use RestauranteLegal\Config\Database;

$meuBancoDeDados = new Database();
$meuBancoDeDados->conectar();