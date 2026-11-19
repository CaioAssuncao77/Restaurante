<?php

namespace RestauranteLegal\Models;

use Exception;

class Sobremesa {

    private int $idSobremesa;
    private string $nomeSobremesa;
    private ?string $descricao;
    private float $preco;
    private string $tabela = "sobremesas";

    // Construtor
    public function __construct(
        int $idSobremesa,
        string $nomeSobremesa,
        ?string $descricao = null,
        float $preco = 0.0
    ) {

        $this->setIdSobremesa($idSobremesa);
        $this->setNomeSobremesa($nomeSobremesa);
        $this->setDescricao($descricao);
        $this->setPreco($preco);

    }

    // Getters

    public function getIdSobremesa(): int {
        return $this->idSobremesa;
    }

    public function getNomeSobremesa(): string {
        return $this->nomeSobremesa;
    }

    public function getDescricao(): ?string {
        return $this->descricao;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    // Métodos formatados para exibição

    public function getPrecoFormatado(): string {
        return "R$ " . number_format($this->preco, 2, ',', '.');
    }

    // Setters

    public function setIdSobremesa(int $pIdSobremesa): void {
        $this->idSobremesa = $pIdSobremesa;
    }

    public function setNomeSobremesa(string $pNomeSobremesa): void {

        if ($pNomeSobremesa == "") {
            throw new Exception("O nome da sobremesa precisa ser preenchido");
        } else if (strlen($pNomeSobremesa) < 3) {
            throw new Exception("O nome da sobremesa precisa ter ao menos 3 caracteres");
        }

        $this->nomeSobremesa = $pNomeSobremesa;
    }

    public function setDescricao(?string $pDescricao): void {
        $this->descricao = $pDescricao;
    }

    public function setPreco(float $pPreco): void {

        if (!is_numeric($pPreco)) {
            throw new Exception("O preço deve ser um valor numérico");
        }

        $pPreco = (float) $pPreco;

        if ($pPreco < 0) {
            throw new Exception("O preço não pode ser menor que zero");
        }

        $this->preco = $pPreco;
    }

    // Aplicar desconto em porcentagem

    public function aplicarDesconto(float $valorDesconto): void {

        if ($valorDesconto < 0 || $valorDesconto > 100) {
            throw new Exception("O desconto deve estar entre 0 e 100%");
        }

        $this->preco = $this->preco - ($this->preco * $valorDesconto / 100);

    }

    // Método HTML

    public function getSobremesaHTML(): string {

        $desc = $this->descricao ?? "Sem descrição";

        return "Id: " . $this->getIdSobremesa() . "<br>
        Nome da Sobremesa: " . $this->getNomeSobremesa() . "<br>
        Descrição: " . $desc . "<br>
        Preço: " . $this->getPrecoFormatado();

    }

}
