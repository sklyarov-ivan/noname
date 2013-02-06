<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Layouts {
    
    public function before()
    {
        parent::before();
        $this->template->header[] = Widget::load('MainNavMenu');
        
        
    }
    public function action_index()
    {
       
        $this->template->header[] = Widget::load('MainPageHeader');
        
    }
    
  
}