<?php
require_once('PHPUnit/Framework.php');
function __autoload($class)
{
   $directorys = array( 
            '/lib/'
        );
        foreach($directorys as $directory)
        {
            if(file_exists(dirname(__FILE__).$directory.$class.'.php'))
            {
                require_once(dirname(__FILE__).$directory.$class.'.php');
                return;
            }            
        }
}

class CalcTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
		$this->calc = new Calc();
	}
	
	public function testDiv() {
		$this->assertEquals(1,$this->calc->div(2,2));
	}

	public function testMul() {
		$this->assertEquals(4,$this->calc->mul(2,2));
	}


	public function testSum() {
		$this->assertEquals(4,$this->calc->sum(2,2));
		$this->assertNotEquals(3,$this->calc->sum(1,1));
	}
	public function testSub() {
		$this->assertEquals(0,$this->calc->sub(2,2));
	}
	public function tearDown() {
		unset($this->calc);
	}	
}
?>
