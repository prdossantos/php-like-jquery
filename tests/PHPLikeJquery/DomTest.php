<?php
use PHPUnit_Framework_TestCase as TestCase;
use PHPLJ\Dom;

class DomTest extends TestCase {

	public function testLoad()
	{
		$dom = new Dom('<div id="ffff" class="asd">asdf</div>');
		print_r($dom->find('#ffff')->attr('class'));
	}
}