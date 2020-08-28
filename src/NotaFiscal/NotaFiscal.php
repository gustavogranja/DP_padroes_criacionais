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

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }

    
//    public function clonar(): NotaFiscal
//    {
//        $cloneNotaFiscal = new NotaFiscal();
//        $cloneNotaFiscal->cnpjEmpresa = $this->cnpjEmpresa;
//        $cloneNotaFiscal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
//        $cloneNotaFiscal->itens = $this->itens;
//        $cloneNotaFiscal->observacoes = $this->observacoes;
//        $cloneNotaFiscal->dataEmissao = $this->dataEmissao;
//        $cloneNotaFiscal->valorImposto = $this->valorImposto;
//
//        return $cloneNotaFiscal;
//    }


}