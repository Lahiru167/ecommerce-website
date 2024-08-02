<?php

require 'contact.php'; // Ensure this path is correct relative to removedTest.php

use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    public function testContactFunctionn() {
        // Pass an argument to removedFunction
        $result = ContactFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = ContactFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>
