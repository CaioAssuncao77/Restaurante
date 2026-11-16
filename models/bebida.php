<?php

namespace RestauranteLegal\Models;

class Bebida {

    private int $idBebida;
    private string $nomeBebida;
    private float $volumeML;
    private bool $alcoolico;
    private float $preco;
    private string $tabela = "bebidas";

    // Construtor
    public function __construct(
        int $idBebida,
        string $nomeBebida,
        float $volumeML,
        bool $alcoolico = false,
        float $preco = 0.0
    ) {
        $this->idBebida = $idBebida;
        $this->nomeBebida = $nomeBebida;
        $this->volumeML = $volumeML;
        $this->alcoolico = $alcoolico;
        $this->preco = $preco;
    }

    // Getters
    public function getIdBebida(): int {
        return $this->idBebida;
    }

    public function getNomeBebida(): string {
        return $this->nomeBebida;
    }

    public function getVolumeML(): float {
        return $this->volumeML;
    }

    public function isAlcoolico(): bool {
        return $this->alcoolico;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    // Métodos formatados para exibição
    public function getPrecoFormatado(): string {
        return "R$ " . number_format($this->preco, 2, ',', '.');
    }

    public function getAlcoolicoTexto(): string {
        return $this->alcoolico ? "Sim" : "Não";
    }

    public function getBebidaHTML(): string {
        return "Id: " . $this->getIdBebida() . "<br>
        Nome da Bebida: " . $this->getNomeBebida() . "<br>
        Volume: " . $this->getVolumeML() . " ml<br>
        Alcoólico: " . $this->getAlcoolicoTexto() . "<br>
        Preço: " . $this->getPrecoFormatado();
    }
}
