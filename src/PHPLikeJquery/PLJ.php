<?php
namespace PHPLJ;
use PHPLJ\Dom;

/**
 * PLJ::in('<html>')->find('#test')->html()
 * PLJ('<html>')->find('a')->attr('title','test')
 */
function PLJ($html)
{
	return new Dom($html);
}

class PLJ {

	public static function in($html)
	{
		return new Dom($html); 			
	}
}