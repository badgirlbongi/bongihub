<?php
/** 
 * controller class Api and access point
 * @category    Controller
 * @package     FirstTest
 * @author      RamakhanyaD <techcodehive@gmail.com>
 * @license     openSource 
 * @link        https://revtech.co.za
 */

//exception which causes HTTP ERROR 404(Not Found)
class NotFoundException extends Exception {}

//Application controller and main access point
final class Index
{
    const LAYOUT_DIR = '';
    const PAGE_DIR = '';
    const LAYOUT_PAGE = '';
    const DEFAULT_PAGE = '';

    //static $class is where you declare all classes created outside index.php form
    private static $CLASS = 
    [

    ];

    //system configurations
    function __construct()
    {
        // error reporting - all errors for development (ensure you have display_errors = On in your php.ini file)
        error_reporting(E_ALL | E_STRICT);
        mb_internal_encoding('UTF-8');
        set_exception_handler([$this, 'handleException']);
        spl_autoload_register([$this, 'loadClass']);
    }

    //class loader
    public function loadClass($name)
    {
        if (!array_key_exists($name, self::$CLASS)) 
        { die('Class "' . $name . '" not found.'); }
        require_once __DIR__.self::$CLASS[$name];
    }

    //execption handler
    //these exceptions will output  what's on the 404&500 files on the web folder
    public function handleException($ex)
    {
        $extra = ['message' => $ex->getMessage()];
        if ($ex instanceof NotFoundException) 
        { header('HTTP/1.0 404 Not Found');
          $this->runPage('404', $extra);
        } 
        else 
        { // TODO log exception
          header('HTTP/1.1 500 Internal Server Error');
          $this->runPage('500', $extra);
        }
    }



}

