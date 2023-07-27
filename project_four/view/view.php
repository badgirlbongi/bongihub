<?php
final class User
{
    private $name;
    private $surname;
    private $email;
    private $password;
    
    function set_name($name)
    { $this->name = $name;}
    
    function set_surname($surname) 
    { $this->surname = $surname;}
    
    function set_email($email)
     { $this->email = $email;}

    function set_password($password)
     { $this->password = $password;}

public function register( array $user){
    $errors = [];

    if(trim($user['name'])){
        $this->name = $user['name'];
    }
    else{
        $errors[] = new ValidatorError('name','name cannot be empty');
    }

    if(trim($user['email'])){
        $this->email = $user['email'];
    }
    else{
        $errors[] = new ValidatorError('email','email cannot be empty');
    }

    if(trim($user['password'])){
        $this->password = $user['password'];
    }
    else{
        $errors[] = new ValidatorError('password','password cannot be empty');
    }
    
    if(trim($user['password2'])){
        if($user['password2'] != $this->password){
            $errors[] = new ValidatorError('Password Match','Password and passwordRepeat must match');
        }
    }
    else{
        $errors[] = new ValidatorError('passwordRepeat','passwordRepeat cannot be empty');
    }
    
    return $errors;
}

public function login( array $user){
    $errors = [];

    if(trim($user['email'])){
        $this->email = $user['email'];
    }
    else{
        $errors[] = new ValidatorError('email','email cannot be empty');
    }

    if(trim($user['password'])){
        $this->password = $user['password'];
    }
    else{
        $errors[] = new ValidatorError('password','password cannot be empty');
    }

    return $errors;
}

public function forgot( array $user){
    $errors = [];
    if(trim($user['name'])){
        $this->name = $user['name'];
    }
    else{
        $errors[] = new ValidatorError('name','name cannot be empty');
    }

    if(trim($user['email'])){
        $this->email = $user['email'];
    }
    else{
        $errors[] = new ValidatorError('email','email cannot be empty');
    }

    return $errors;
}

public function getId(){
    return $this->id;
}

public function getName(){
    return $this->name;
}

public function getEmail(){
    return $this->email;
}

   public function getPassword()
   {
    return $this->password;
   }
}
?>