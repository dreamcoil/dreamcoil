<?php

use Dreamcoil\Getter;

class DebugTest extends PHPUnit_Framework_TestCase
{
	private $getter, $debug;
	
	public function __construct()
	{
		
		$this->getter = new Getter();
		
		$this->debug = new \Dreamcoil\Debug();
	
	}
	
	public function testAdd()
	{
	
		$this->debug->add('Hello this is phpunit test', $this->getter->constant('LOG_INFO_TEXT'));
	
	}

}
