<?php /*
    // user template setup
    $model = ['register'];

    $action = Helper::getUrlParam('model');

    if(! (array_key_exists('model',$_GET) && in_array($action, $model))){
        throw  new NotFoundException("View not found");  
    }
    // user POST request 
    $errors = [];
    if(array_key_exists('register', $_POST)){
        $data = [
            'name' => isset($_POST['user']['name'])?$_POST['user']['name'] :'',
            'surname' => isset($_POST['user']['surname'])?$_POST['user']['surname'] :'',
            'email' => isset($_POST['user']['email'])?$_POST['user']['email'] :'',
            'cellno' => isset($_POST['user']['cellno'])?$_POST['user']['cellno'] :''
        ];
            $obj = new User();  
            $errors = $obj->register($data);

        if(empty($errors)){
           
           $user = new UserDao();

           // returns the last insert Id
           $_SESSION['_userId'] = $user->setProperties($obj);

           echo '<br />registration good';
        }
    }*/
    ?>