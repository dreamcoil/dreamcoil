<?php

use Dreamcoil\Getter;

class ConstantTest extends PHPUnit_Framework_TestCase
{
    
	public function __construct()
	{
		
		$getter = new Getter();
	
	}
    
    public function testTime()
    {
    	
        $this->assertEquals($getter->constant('ONE_SECOND'), 1);
        
        $this->assertEquals($getter->constant('ONE_MINUTE'), 60);
        
        $this->assertEquals($getter->constant('ONE_HOUR'), 3600);
        
        $this->assertEquals($getter->constant('ONE_DAY'), 86400);
        
        $this->assertEquals($getter->constant('ONE_WEEK'), 604800);
        
        $this->assertEquals($getter->constant('ONE_YEAR'), 30585600);
    }
    
    public function testVersion()
    {
        $this->assertTrue('DREAMCOIL_VERSION' !== null);
    }
}
