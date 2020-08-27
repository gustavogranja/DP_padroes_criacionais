<?php

namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(\DateTimeImmutable $dataRealizacao, string $nomePrestador)
    {
        parent::__construct($dataRealizacao);
        $this->nomePrestador = $nomePrestador;
    }
}