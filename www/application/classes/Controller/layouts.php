<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Layouts extends Controller_Template {
    public $template = 'layout';
    protected $_user;
    protected $_auth;


    public function before() {
        parent::before();
        $this->_auth = Auth::instance();
        $this->_user = $this->_auth->get_user();
        $settings = Kohana::$config->load('links');
        $this->template->styles = $settings->get('styles');
        $this->template->scripts = $settings->get('scripts');
        
        
        
        $this->template->title_page = '';
        $this->template->title = Kohana::$config->load('base')->get('title').$this->template->title_page;
        
        
        $this->template->header = array();
        $this->template->footer = array();
        $this->template->content_left = array();
        $this->template->content_center = array();
        $this->template->content_right = array();
        
        $this->template->username = '';
        if (Auth::instance()->logged_in())
        {
            $user = ORM::factory('user')->where('id', '=', Auth::instance()->get_user())->find();
            $this->template->username = $user->username;
        }
        
    }
}