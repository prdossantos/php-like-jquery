<?php
use PHPUnit_Framework_TestCase as TestCase;
use PHPLJ\PLJ;

class PLJTest extends TestCase {

	protected $html;

	public function setUp()
	{
		$this->html = '<div id="ffff" class="asd123">asdf <p id="123" class="test">another</p></div>';
	}

	public function testIn()
	{
		$this->assertEquals('asd123', PLJ::in($this->html)->find('#ffff')->attr('class'));
	}

	public function testCss()
	{
		//Retorna o html
		$this->assertNotNull(PLJ::in($this->html)->find('.asd123')->css(['color'=>'white'])->render());
		
		//Imprime o html
		$this->assertNull(PLJ::in($this->html)->find('.asd123')->css('color','white')->render(true));
	}

	public function testAddClass()
	{
		$this->html = PLJ::in($this->html)->find('#ffff')->addClass('white')->render();
		$this->assertEquals('asd123 white',PLJ::in($this->html)->find('#ffff')->attr('class'));
	}

	public function testHasClass()
	{
		$this->assertEquals('another',PLJ::in($this->html)->find('#123')->hasClass('test')->html());	
	}

	public function testAppend()
	{
		$this->html = PLJ::in($this->html)->find('#123')->hasClass('test')->append('<em>asd</em>')->save();
		$this->assertEquals('asd',PLJ::in($this->html)->find('em')->html());	
	}

	public function testPrepend()
	{
		$this->html = PLJ::in($this->html)->find('#123')->hasClass('test')->prepend('<em>asd</em>')->save();
		$this->assertNotNull(PLJ::in($this->html)->find('#123')->html());	
	}

}