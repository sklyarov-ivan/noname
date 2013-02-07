<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_MainNavMenu extends Controller_Widgets {
    public $template = 'widgets/main_nav_menu';
    public function action_index()
    {
        $this->template->username = Auth::instance()->get_user()->username;
    }
}