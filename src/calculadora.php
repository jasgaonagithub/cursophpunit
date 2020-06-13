<?php
/**
 * Clase calculadora que permite realizar varias operaciones matematicas simples 
 */
class Calculadora {

    /**
     * Realiza la suma de dos numeros
     */
    public function sumar($a, $b){
        return $a + $b;
    }

    /**
     * Realiza la resta de dos numeros
     */
    public function restar($a, $b){
        return $a - $b;
    }

    /**
     * Realiza la multiplicacion de dos numeros
     */
    public function multiplicar($a, $b){
        return $a * $b;
    }
    /**
     * Realiza la division de dos numeros
     */
    public function dividir($a, $b){
        return $a / $b;
    }
}