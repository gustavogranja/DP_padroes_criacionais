<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 700;
$item3 = new ItemOrcamento();
$item3->valor = 200;
$notafiscal = $builder->paraEmpresa('05282562000111', 'THOTHgi')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacao('Nota fiscal construida com um construtor')
    ->constroi();

$notafiscal2 = clone $notafiscal;
$notafiscal2->itens[] = new ItemOrcamento();

var_dump($notafiscal2, $notafiscal);
