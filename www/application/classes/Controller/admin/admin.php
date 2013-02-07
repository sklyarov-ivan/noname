<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Admin extends Controller_Index {
    public function before()
    {
        parent::before();
        if (!$this->_auth->logged_in('admin'))
        {
            HTTP::redirect(Rote::get('auth')->uri(array('action'=>'login')));
        }
        $menu = Widget::load('AdminNavMenu');
        $this->template->header = array($menu);
    }
    
    public function action_index() {
        $statistic = View::factory('admin/statistic');
        
        $this->template->content_center = array($statistic);
    }
    
    public function action_galery()
    {
        
    }
}