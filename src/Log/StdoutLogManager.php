<?php

namespace Alura\DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWritter(): logWritter
    {
        return new StdoutLogWritter();
    }
}