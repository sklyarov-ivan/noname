<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_AdminNavMenu extends Controller_Widgets {
    public $template = 'widgets/admin_nav_menu';
    public function action_index()
    {
        try
        {
             if(!Auth::instance()->get_user()->username)
                 throw new Exception ('wrong username');
            $username = Auth::instance()->get_user()->username;
            
        }
        catch (Exception $e)
        {
            $errors = $e->getMessage();
        }
        $this->template->username = isset($username)?$username:$errors;
    }
}