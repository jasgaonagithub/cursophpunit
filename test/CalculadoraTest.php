<?php 

use PHPUnit\Framework\TestCase;

include './src/calculadora.php';

class CalculadoraTest extends TestCase {

    public function testCalculadora(){

        $calculadora = new Calculadora();
        $this->assertEquals(10, $calculadora->sumar(4, 6));
        $this->assertEquals(8, $calculadora->restar(10, 2));
        $this->assertEquals(15, $calculadora->multiplicar(3, 5));
        $this->assertEquals(4, $calculadora->dividir(12, 3));
    }
}

