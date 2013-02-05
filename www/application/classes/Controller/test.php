<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller_Layouts {
    public function before()
    {
        parent::before();
        
    }
    public function action_index()
    {
        $this->template->header = array(View::factory('layout2'));
        
        
    }
    
  
}