<?php

namespace RestauranteLegal\Models;

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
        $this->idSobremesa = $idSobremesa;
        $this->nomeSobremesa = $nomeSobremesa;
        $this->descricao = $descricao;
        $this->preco = $preco;
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

    public function getSobremesaHTML(): string {
        $desc = $this->descricao ?? "Sem descrição";

        return "Id: " . $this->getIdSobremesa() . "<br>
        Nome da Sobremesa: " . $this->getNomeSobremesa() . "<br>
        Descrição: " . $desc . "<br>
        Preço: " . $this->getPrecoFormatado();
    }
}
