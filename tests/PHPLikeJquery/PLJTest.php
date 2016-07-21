<?php
use PHPUnit_Framework_TestCase as TestCase;
use PHPLJ\PLJ;

class PLJTest extends TestCase {

	public function testIn()
	{
		print_r(PLJ::in('<div id="ffff" class="asd">asdf</div>')->find('#ffff')->attr('class'));
	}
}