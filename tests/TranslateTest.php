<?php

use Dreamcoil\Translate;

class TranslateTest extends PHPUnit_Framework_TestCase
{
    
    public $translate;
    
	public function __construct()
	{
		
		$this->translate = new Translate();
	
	}
	
	public function testValues()
	{
	    
	    $this->assertEquals($this->translate->get('footer'), 'footer');
	    
	}
	
}
