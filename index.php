<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
echo json_encode(["API Restaurante Legal Status On"=>"Seja Muito bem-vinda à API do Restaurante Legal! Para saber sobre os EndPoints consulte a documentação"],JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>