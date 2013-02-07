<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Auth extends Controller {
    private $_auth;
    
    public function action_login()
    {
        $_POST['password']  =   'qwerqwer';
        $_POST['email'] =   'mail@mail.ru';
        $errors = '';    
        $data = Arr::extract($_POST, array('email', 'password', 'remember'));
        $status = Auth::instance()->login($data['email'], $data['password'], (bool) $data['remember']);
        if (!$status)
            $errors = array(Kohana::message('auth/user','no_user'));

        echo json_encode(array('errors'=>$errors));
        
    }
    
    public function action_register()
    {

            $errors = '';
            $data = Arr::extract($_POST, array('username','email','password','password_confirm'));
            $users = ORM::factory('user');
            try
            {
                $users->create_user($_POST, array(
                   'username',
                    'email',
                    'password',
                ));
                $role = ORM::factory('role')->where('name', '=', 'login')->find();
                $users->add('roles',$role);
                $this->action_login();
               
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
            echo json_encode(array('errors'=>$errors));
    }
    

}