<?php

use Dreamcoil\Getter;

class ConstantTest extends PHPUnit_Framework_TestCase
{
    
    public $getter;
    
	public function __construct()
	{
		
		$this->getter = new Getter();
	
	}
    
    public function testTime()
    {
    	
        $this->assertEquals($this->getter->constant('ONE_SECOND'), 1);
        
        $this->assertEquals($this->getter->constant('ONE_MINUTE'), 60);
        
        $this->assertEquals($this->getter->constant('ONE_HOUR'), 3600);
        
        $this->assertEquals($this->getter->constant('ONE_DAY'), 86400);
        
        $this->assertEquals($this->getter->constant('ONE_WEEK'), 604800);
        
        $this->assertEquals($this->getter->constant('ONE_YEAR'), 30585600);
    }
    
    public function testLogMeta()
    {
    	
    	$this->assertEquals($this->getter->constant('LOG_INFO_TEXT'), '[info]');
    	
    	$this->assertEquals($this->getter->constant('LOG_WARN_TEXT'), '[Warn]');
    	
    	$this->assertEquals($this->getter->constant('LOG_ERROR_TEXT'), '[ERROR]');
    	
    }
    
    public function testVersion()
    {
        $this->assertTrue('DREAMCOIL_VERSION' !== null);
    }
}
