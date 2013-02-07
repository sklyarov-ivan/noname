<?php defined('SYSPATH') or die('No direct script access.');


class Controller_User_User extends Controller_Index {
    public function before()
    {
        parent::before();
        if (!$this->_auth->logged_in())
            HTTP::redirect (Rote::get('auth')->uri(array('action'=>'login')));
    }
}