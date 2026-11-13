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
    }catch (\PDOException $e){
        return json_encode(["Erro"=>"Não foi possivel conectar ao banco de dados. " . $e->getMessage()], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }catch (\Throwable $e){
        return json_encode(["Erro"=> "O programa apresentou um erro genérico". $e->getMessage()], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    return $this->conexao;


}

}

}