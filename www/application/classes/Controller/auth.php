<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Auth extends Controller_Layouts {
    private $_auth;
    
    public function action_login()
    {
       if (Auth::instance()->logged_in())
       {
           HTTP::redirect('account');
       }
       
       if (isset($_POST['submit']))
       {
           $data = Arr::extract($_POST, array('email', 'password', 'remember'));
           $status = Auth::instance()->login($data['email'], $data['password'], (bool) $data['remember']);
           if ($status)
               HTTP::redirect ('account');
           else
               $errors = array(Kohana::message('auth/user','no_user'));
       }
       $login_form = View::factory('auth/login')
               ->bind('errors', $errors)
               ->bind('data', $data);
       $this->template->content_center = array($login_form);
        
    }
    
    public function action_register()
    {
//        if (Auth::instance()->logged_in())
//            HTTP::redirect ('account');
        if(isset($_POST['submit']))
        {
            $data = Arr::extract($_POST, array('username','email','password','password_confirm'));
            $users = ORM::factory('user');
            try
            {
                $users->create_user($data, array(
                   'username',
                    'email',
                    'password',
                ));
                $role = ORM::factory('role')->where('name', '=', 'login')->find();
                $users->add('roles',$role);
                $this->action_login();
                HTTP::redirect('account');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
        }
        $reg_form=View::factory('auth/register')
                ->bind('errors', $errors)
                ->bind('data', $data);
        $this->template->title_page = 'Registrate';
        $this->template->content_center = array($reg_form);
    }
    
    public function action_logout()
    {
        if(Auth::instance()->logout())
            HTTP::redirect ();
    }
}