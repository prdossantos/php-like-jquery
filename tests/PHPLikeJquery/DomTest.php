<?php
use PHPUnit_Framework_TestCase as TestCase;
use PHPLJ\Dom;

class DomTest extends TestCase {

	protected $dom;

	public function setUp()
	{
		$this->dom = new Dom('<div id="ffff" class="asd">asdf</div>');
		
	}

	public function testAttr()
	{
		$this->assertEquals('asd',$this->dom->find('#ffff')->attr('class'));
	}
}