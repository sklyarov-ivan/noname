<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
    public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
                                array('min_length', array(':value', 4)),
				array('max_length', array(':value', 32)),
				array(array($this, 'unique'), array('username', ':value')),
			),
			'password' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'unique'), array('email', ':value')),
			),
		);
	}

	
	public function labels()
	{
		return array(
			'username'         => 'Имя пользователя',
			'email'            => 'email адрес',
			'password'         => 'Пароль',
                        'password_confirm'  =>  'Повротить пароль'
		);
	}

}