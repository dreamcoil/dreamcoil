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
	    
	    $this->assertEquals($this->translate->get('fail.footer'), 'fail.footer');
	    $this->assertEquals($this->translate->get('general.footer'), 'Programmiert von xolf');
	    
	}
	
	public function testPlaceholders()
	{
	    
	    $this->assertEquals($this->translate->get('general.downloads'), 'Dreamcoil wurde schon %downloads%x heruntergeladen');
	    $this->assertEquals($this->translate->get('general.downloads', ['downloads' => 3151]), 'Dreamcoil wurde schon 3151x heruntergeladen');
	    
	}
	
}
