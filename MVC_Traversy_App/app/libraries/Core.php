<?php

/* 
* App Core Class
* Creates URL and Loads core controller
* Url Format - /controller/method/params
*/

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod ='index';
    protected $params = [];

    public function __construct(){
        $url = $this->getUrl();

        //https://www.php.net/manual/en/function.file-exists.php
        // check if file exists in this case for controllers
        //https://www.php.net/manual/en/function.ucwords.php
        //Uppercase first letter for controllers since will be capital
        if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){

            // if exists set as controller
            $this->currentController = ucwords($url[0]);

            // unset index 0
            print_r($url[0]);
            unset($url[0]);
        }

        // require the controller 
        require_once '../app/controllers/' . $this->currentController . '.php';
        
        // Instantiate controller class
        $this->currentController = new $this->currentController;
    }

    public function getUrl(){
        /*
        * $_GET
        * https://www.php.net/manual/en/reserved.variables.get
        * 'super global' or auto global variable available in all scopes
        * associative array of variables passed to the script via the Url parameters, not 
        * only for get requests but all requests within a query string
        * Get variable is passed through Urldecode()
        * https://www.php.net/manual/en/function.urldecode.php
        * $_GET and $_REQUEST are already decoded
        */
        // echo $_GET['url'];

        //check to see if url is set
        if(isset($_GET['url'])){
            print_r($_GET['url']. " " . "hi");
            //https://www.php.net/manual/en/function.rtrim.php
            //trim but add white space
            $url = rtrim($_GET['url'], '/');
            //https://www.php.net/manual/en/filter.filters.sanitize.php 
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //https://www.php.net/manual/en/function.explode.php url to array of strings
            $url = explode('/', $url);
            return $url;
        }
    }
}