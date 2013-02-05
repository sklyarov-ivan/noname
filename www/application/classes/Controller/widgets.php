<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets extends Controller_Template {
    public function before() 
    {
        parent::before();
        if ($this->request->is_initial())
            $this->auto_render = FALSE;
    }
}