<?php
class Calc
{
	private $a;
	private $b;
	private $c;
    public function __construct()
    {
    }    

    public function setA($a)
    {
		$this->a = $a;
		return $a;
    }

    public function setB($b)
    {
		$this->b = $b;
		return $b;
    }    

    public function sum()
    {
		$this->c = $this->a + $this->b;
		return $this->c;
    }

    public function sub()
    {
		$this->c = $this->a - $this->b;
		return $this->c;    
    }
    
    public function mul()
    {
		$this->c = $this->a * $this->b;
		return $this->c;    
    }
   
    public function div()
    {
		$this->c = $this->a / $this->b;
		return $this->c;    
	
    }
}