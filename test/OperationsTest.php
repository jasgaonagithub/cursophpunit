<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include './src/Operations.php';

class OperationsTest extends TestCase {

    public function testFactorialNumber() : void {
        $number = 5;
        $expected = 120;
        $operation = new Operations();
        $factorial = $operation->factorial($number);
        $this->assertIsInt($factorial);
        $this->assertEquals($expected, $factorial);
     }    
}


