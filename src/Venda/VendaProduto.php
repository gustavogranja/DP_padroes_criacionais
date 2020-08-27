<?php

namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{
    private int $pesoProduto;

    public function __construct(\DateTimeImmutable $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}