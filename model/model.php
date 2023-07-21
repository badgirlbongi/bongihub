<?php
//the class i created
final class Client{
private $name;
private $surname;
private $email;
private $cellno;

function __construct(){}

public function setParam(stdClass $client){

    if(array_key_exists('name', $client)){
        $this->name = $client->name;
    }

    if(array_key_exists('surname',$client)){
        $this->surname = $client->surname;
    }

    if(array_key_exists('email', $client)){
        $this->email = $client->email;
    }

    if(array_key_exist('cellno', $client)){
        $this->cellno = $client->institution;
    }
}

/*
public function register( array $client)
{
    $errors = [];

    if(trim($client['name'])){
        $this->name = $client['name'];
    }
    else{
        $errors[] = new ValidatorError('name','name cannot be empty');
    }

    if(trim($client['surname'])){
        $this->surname = $client['surname'];
    }
    else{
        $errors[] = new ValidatorError('surname','surname cannot be empty');
    }

    if(trim($client['email'])){
        $this->email = $client['email'];
    }
    else{
        $errors[] = new ValidatorError('email','email cannot be empty');
    }
    
    if(trim($client['cellno'])){
        $this->cellno = $client['cellno'];
    }
    else{
        $errors[] = new ValidatorError('cellno','cellphone cannot be empty');
    } 

    return $errors;
}*/

function set_name($name)
{ $this->name = $name;}

function get_name() 
{ return $this->name;}

function set_surname($surname) 
{ $this->surname = $surname;}

function get_surname()
{ return $this->surname;}

function set_email($email)
 { $this->email = $email;}

function get_email() 
{ return $this->email;}

function set_cellno($cellno) 
{ $this->cellno = $cellno;}

function get_cellno()
{ return $this->cellno;}

}

//helper class
final class Helper{ 	

    /**
     * Get value of the URL param.
     * @return string parameter value
     * @throws NotFoundException if the param is not found in the URL
     */
    public static function getUrlParam($name) {
        if (!array_key_exists($name, $_GET)) {
            throw new NotFoundException('URL parameter "' . $name . '" not found.');
        }
        return $_GET[$name];
    }

    /**
     * Redirect to the given page.
     * @param type $page target page
     * @param array $params page parameters
     */
    public static function redirect($page, array $params = []) {
        header('Location: ' . self::createLink($page, $params));
        die();
    }

    /**
     * Generate link.
     * @param string $page target page
     * @param array $params page parameters
     * @return 
     */
    public static function createLink($page, array $params = []) {
        unset($params['page']);
        return (empty($params))?$page :$page.'&'.http_build_query($params);
    }

    /**
     * Capitalize the first letter of the given string
     * @param string $string string to be capitalized
     * @return string capitalized string
     */
    public static function capitalize($string) {
        return ucfirst(mb_strtolower($string));
    }

    /**
     * Escape the given string
     * @param string $string string to be escaped
     * @return string escaped string
     */
    public static function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES);
    }
}
?>