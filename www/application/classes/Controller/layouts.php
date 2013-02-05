<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Layouts extends Controller_Template {
    public $template = 'layout';
    
    public function before() {
        parent::before();
        $this->template->styles = Kohana::$config->load('links')->get('styles');
        $this->template->scripts = Kohana::$config->load('links')->get('scripts');
        
        
        
        $this->template->title_page = '';
        $this->template->title = Kohana::$config->load('base')->get('title').$this->template->title_page;
        
        
        $this->template->header = array();
        $this->template->footer = array();
        $this->template->content_left = array();
        $this->template->content_center = array();
        $this->template->content_right = array();
    }
}