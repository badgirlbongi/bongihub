<?php
  //user template setup
  $view = ['signup','login'];

  $action = $view; //Helper::getUrlParam('user');

/*if(! (array_key_exists('user',$_GET) && in_array($action, $view)))
{
    throw  new NotFoundException("View not found");  
}*/

$errors = [];
    if(array_key_exists('signup', $_POST))
    {
        $data = ['name' => isset($_POST['user']['name'])?$_POST['user']['name'] :'',
            'surname' => isset($_POST['user']['surname'])?$_POST['user']['surname'] :'',
            'email' => isset($_POST['user']['email'])?$_POST['user']['email'] :'',
            'password' => isset($_POST['user']['password'])?$_POST['user']['password'] :'',
            'password2' => isset($_POST['user']['passwordRepeat'])?$_POST['user']['passwordRepeat'] :''];

            $obj = new User();  
            $errors = $obj->signup($data);

        if(empty($errors))
        {
           echo '<br />signup was successful';
        }
    }
    else if(array_key_exists('login', $_POST))
    {
        $data = ['email' => isset($_POST['user']['email'])?$_POST['user']['email'] :'',
                'password' => isset($_POST['user']['password'])?$_POST['user']['password'] :''];

        $obj = new User();  
        $errors = $obj->login($data);

        if(empty($errors)){

            if($obj->getPassword() != $data['password']){
                $errors[] = new ValidatorError('Login Failed', 'Incorrect Username or Password');
            }
            else{ echo 'welcome'; }
        }
        else if( array_key_exists('cancel', $_POST))
        { Helper::redirect('.'); }
    }


