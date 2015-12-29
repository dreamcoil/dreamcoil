<?php

class ConstantTest extends PHPUnit_Framework_TestCase
{
    
	public function __construct()
	{
		
		error_reporting(E_ALL ^ E_NOTICE);
	
	}
    
    public function testTime()
    {
    	
        $this->assertEquals('ONE_SECOND', 1);
        
        $this->assertEquals('ONE_MINUTE', 60);
        
        $this->assertEquals('ONE_HOUR', 3600);
        
        $this->assertEquals('ONE_DAY', 86400);
        
        $this->assertEquals('ONE_WEEK', 604800);
        
        $this->assertEquals('ONE_YEAR', 30585600);
    }
    
    public function testVersion()
    {
        $this->assertTrue('DREAMCOIL_VERSION' !== null);
    }
}
