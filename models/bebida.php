<?php

namespace RestauranteLegal\Models;

use Exception;

class Bebida {

    private int $id;
    private string $nome;
    private int $volumeML;
    private bool $alcoolico = false;
    private float $preco;
    private string $tabela = "bebidas";

    // Construtor
    public function __construct(
        int $id,
        string $nome    ,
        int $volumeML,
        bool $alcoolico,
        float $preco
    ) {

        $this->setIdBebida($id);
        $this->setNomeBebida($nome);
        $this->setVolumeML($volumeML);
        $this->setAlcoolico($alcoolico);
        $this->setPreco($preco);

    }

    // Getters

    public function getIdBebida(): int {
        return $this->id;
    }

    public function getNomeBebida(): string {
        return $this->nome;
    }

    public function getVolumeML(): int {
        return $this->volumeML;
    }

    public function isAlcoolico(): bool {
        return $this->alcoolico;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function getPrecoFormatado(): string {
        return "R$ " . number_format($this->preco, 2, ',', '.');
    }

    public function getAlcoolicoTexto(): string {
        return $this->alcoolico ? "Sim" : "Não";
    }

    // Setters

    public function setIdBebida(int $pIdBebida): void {
        $this->id = $pIdBebida;
    }

    public function setNomeBebida(string $pNomeBebida): void {

        if ($pNomeBebida == ""){
            throw new Exception("O nome da bebida precisa ser preenchido");
        } else if (strlen($pNomeBebida) < 3) {
            throw new Exception("O nome da bebida precisa ter ao menos 3 caracteres");
        }

        $this->nome = $pNomeBebida;
    }
    public function setVolumeML(int $pVolumeML): void {

        if ($pVolumeML <= 200) {
            throw new Exception("O volume da bebida deve ser maior que 200 ml");
        }

        $this->volumeML = $pVolumeML;
    }

    public function setAlcoolico(bool $pAlcoolico): void {

        if ($pAlcoolico !== true && $pAlcoolico !== false) {
            throw new Exception("O atributo alcoólico deve ser TRUE ou FALSE");
        }
        $this->alcoolico = $pAlcoolico;
    }

    public function setPreco(float $pPreco): void {

        if (!is_numeric($pPreco)) {
            throw new Exception("O preço deve ser um valor numérico");
        }

        $pPreco = (float) $pPreco;

        if ($pPreco <= 0) {
            throw new Exception("O preço deve ser maior que zero");
        }

        $this->preco = $pPreco;
    }

    // Método HTML

    public function getBebidaHTML(): string {

        return "Id: " . $this->getIdBebida() . "<br>
        Nome da Bebida: " . $this->getNomeBebida() . "<br>
        Volume: " . $this->getVolumeML() . " ml<br>
        Alcoólico: " . $this->getAlcoolicoTexto() . "<br>
        Preço: " . $this->getPrecoFormatado();

    }

}
