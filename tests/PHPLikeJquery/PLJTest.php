<?php
use PHPUnit_Framework_TestCase as TestCase;
use PHPLJ\PLJ;

class PLJTest extends TestCase {

	protected $html;

	public function setUp()
	{
		$this->html = '<div id="ffff" class="asd123">asdf</div>';
	}

	public function testIn()
	{
		$this->assertEquals('asd123', PLJ::in($this->html)->find('#ffff')->attr('class'));
	}
}