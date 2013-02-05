<?php defined('SYSPATH') or die('No direct script access.');

class Cookie extends Kohana_Cookie {

	/**
	 * @var  string  Magic salt to add to the cookie
	 */
	public static $salt = 'rc4v564w5c546d45645c645c5';
}
