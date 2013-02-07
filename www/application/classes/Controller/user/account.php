<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Account extends Controller_Index {
    public function action_index()
    {
        $content = View::factory('user/account')
                ->bind('user', $user);
        $user = ORM::factory('user')->find_all();
        
        $this->template->content_center = array($content);
    }
}