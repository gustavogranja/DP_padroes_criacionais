<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeImmutable $dataEmissao;
    public float $valorImposto;

    public function valor(): float
    {
        return array_reduce($this->itens,
            function (float $valorAcumulado, ItemOrcamento $itemAtual) {
                    return $valorAcumulado + $itemAtual->valor;
            },
            0
        );
    }
}