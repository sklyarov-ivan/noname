<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Galery extends Controller_Admin_Admin {
    public function action_index() {
        $content = View::factory('admin/galery')
                ->bind('data',$data);
    }
}