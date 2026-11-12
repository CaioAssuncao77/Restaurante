<?php

namespace RestauranteLegal\Config;

use PDO;

class Database{
   

private string $host = 'localhost';
private string $database = 'restaurantelegal_db';
private string $user = 'root';
private string $pwd = '';
private string $port = '3306';
private $conexao;

public function conectar(){

    $this -> conexao = null;
    
    $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->database . ';charset=utf8';
    try{
        $this -> conexao = new PDO( $dsn, $this->user, $this->pwd );
         $this->conexao->setAttribute(PDO::ATTR_ERRMODE, 
         PDO::ERRMODE_EXCEPTION);
         echo 'Conectou!';
    }catch (\Exception $e){
        echo "Erro" . $e->getMessage();
    
    }

}

}