<?php

use Dreamcoil\Config;

class ConfigTest extends PHPUnit_Framework_TestCase
{
    
    public $config;
    
	public function __construct()
	{
		
		$this->config = new Config();
	
	}
	
	public function testValues()
	{
	    
	    $this->assertEquals($this->config->get('title'), 'Dreamcoil');
	    
	}
	
}
