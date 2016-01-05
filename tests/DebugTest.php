<?php

use Dreamcoil\Debug;
use Dreamcoil\Getter;

class DebugTest extends PHPUnit_Framework_TestCase
{

	private $debugger, $getter;
	
	public funtion __construct()
	{
	
		$this->debugger = new Debug();
		
		$this->getter = new Getter();
	
	}
	
	public function testAdd()
	{
	
		$this->debugger->add('Hello this is phpunit test', $this->getter->constant('LOG_INFO_TEXT'));
	
	}

}
