<?php
// testing user POST request
//13:00 13.07.2023

$errors = [];
if(array_key_exists('register', $_POST))
{
    $data = 
           [
            'id' => isset($_POST['user']['id'])?$_POST['user']['id'] :'',
            'name' => isset($_POST['user']['name'])?$_POST['user']['name'] :'',
            'surname' => isset($_POST['user']['surname'])?$_POST['user']['surname'] :'',
            'emailaddress' => isset($_POST['user']['emailaddress'])?$_POST['user']['emailaddress'] :'',
            'cellno' => isset($_POST['user']['cellno'])?$_POST['user']['cellno'] :'',
            'password' => isset($_POST['user']['password'])?$_POST['user']['password'] :'',
            'passwordtwo' => isset($_POST['user']['passwordtwo'])?$_POST['user']['passwordtwo'] :'', //15:00 13.07.2023
           ];
    //14:00 13.07.2023
    $obj = new User();
    $errors = $obj->register($data);
             if(empty($errors))
             {
                $user = new UserDao();
                //to return the last insert ID
                $_SESSION['_userId'] = $user->setProperties($obj);
                echo '<br />registration good';
             }
}
else if(array_key_exists('cancel', $_POST))
{
    Helper::redirect('.');
}

?>