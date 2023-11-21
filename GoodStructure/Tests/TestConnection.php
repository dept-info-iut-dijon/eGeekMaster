<?php
/**
 * @author Nicolas
 */
require 'vendor\autoload.php';
use PHPUnit\Framework\TestCase;


class TestConnection extends TestCase
{

    public function testConnection()
    {

        $this->assertSame(1,1);
        
    }

    
}
?>