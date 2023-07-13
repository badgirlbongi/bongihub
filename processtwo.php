// testing user POST request
//13:00 13.07.2023

$errors = [];
if(array_key_exists('register', $_POST))
{
    $data = 
           [
            'id' => isset($_POST['user']['id'])?$_POST[''user']['id'] :'',
            'name' => isset($_POST['user']['name'])?$_POST['user']['name'] :'',
            'surname' => isset($_POST['user']['surname'])?$_POST['user']['surname'] :'',
            'emailaddress' => isset($_POST['user']['emailaddress'])?$_POST['user']['emailaddress'] :'',
            'cellno' => isset($_POST['user']['cellno'])?$_POST['user']['cellno'] :'',
            'password' => isset($_POST['user']['password'])?$_POST['user']['password'] :'',
           ]
           
}