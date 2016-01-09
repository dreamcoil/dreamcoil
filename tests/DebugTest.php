<?php

use Dreamcoil\Getter;

class DebugTest extends PHPUnit_Framework_TestCase
{
	private $getter;
	
	public function __construct()
	{
		
		$this->getter = new Getter();
	
	}
	
	public function testAdd()
	{
	
		\Dreamcoil\Debug::add('Hello this is phpunit test', $this->getter->constant('LOG_INFO_TEXT'));
	
	}

}
