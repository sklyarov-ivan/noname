<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Account extends Controller_User_User {
    public function action_index()
    {
        if (isset($_POST['email']))
        {
                echo __LINE__;
            $users = ORM::factory('user');
            try 
            {
                $users->where('id', '=', $this->_user->id)
                        ->find()
                        ->update_user($_POST, array(
                            'username',
                            'firstname',
                            'lastname',
                            'email'
                        ));
                HTTP::redirect('/account');
            }
            catch (ORM_Validation_Exception $e)
            {
                $error = $e->errors('auth');
            }
            
        }
        $content = View::factory('user/account')
                ->bind('user',$this->_user)
                ->bind('errors',$errors);

        
        $this->template->content_center = array($content);
                
    }
    
    public function action_changepass()
    {
        
        if (isset($_POST['password']))
        {
           
            $users = ORM::factory('user');
            try
            {
             echo __FILE__;
             $users->where('id', '=', $this->_user->id)
                     ->find()
                     ->update_user($_POST,array('password'));
               HTTP::redirect('/account');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('auth');
            }
            print_r(isset($errors)?$errors:'');
        }
    }
}