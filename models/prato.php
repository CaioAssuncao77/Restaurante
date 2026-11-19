<?php

namespace RestauranteLegal\Models;

use Exception;

class Prato
{

    private int $idPrato;
    private string $nomePrato;
    private string $descricao;
    private float $preco;
    private string $tabela = "pratos";

    //Construtor 
    public function __construct(

        int $id,
        string $nome,
        string $descricao,
        float $preco
    ) {

        // $this->idPrato = $id;
        $this->setIdPrato($id);
        // $this->nomePrato = $nome;
        $this->setNomePrato($nome);
        //$this->descricao = $descricao;
        $this->setDescricao($descricao);
        //$this->preco = $preco;
        $this->setPreco($preco);
    }
    //Getters 
    public function getNomePrato(): string
    {
        return $this->nomePrato;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function setDescricao(string $pDescricao): void
    {
        $this->descricao = $pDescricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
    public function getIdPrato(): int
    {
        return $this->idPrato;
    }
    public function getPrecoFormatado(): string
    {
        return "R$" . number_format($this->preco, 2);
    }


    // setters

    public function setIdPrato(int $pIdPrato): void
    {
        $this->idPrato = $pIdPrato;
    }
    public function setNomePrato(string $pNomePrato): void
    {
        //não pode ser vazio
        //ao menos 3 caractére 

        if (strlen($pNomePrato) == "") {
            throw new Exception("O nome do prato precisa ser preenchido");
        } else if (strlen($pNomePrato) < 3) {
            throw new Exception("O nome do prato precisa ter ao menos 3 caractéres");
        }
        $this->nomePrato = $pNomePrato;
    }

    public function setPreco(float $pPreco): void
    {
        //O preço não pode ser negativ, nem 0
        if ($pPreco <= 0) {
            throw new Exception("O preço deve ser maior que 0");
        }
        $this->preco = $pPreco;
    }
    

    public function getPratoHTML(): string
    {
        return "Id" . $this->getIdPrato() . "<br> 
        Nome do Prato:" . $this->getNomePrato() . "<br> 
        Descrição: " . $this->getDescricao() . "<br> 
        Preço:" . $this->getPrecoFormatado();
    }
}
