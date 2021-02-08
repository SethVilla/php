<?php

/* 
* App Core Class
* Creates URL and Loads core controller
* Url Format - /controller/method/params
*/

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod ='index';
    // set this to include empty string because 7.4 php errors
    protected $params = [''];

    public function __construct(){
        $url = $this->getUrl();
        //https://www.php.net/manual/en/function.file-exists.php
        // check if file exists in this case for controllers
        //https://www.php.net/manual/en/function.ucwords.php
        //Uppercase first letter for controllers since will be capital
        // added a check to see if url has a value was throwing an error if $url[0] was empty 
        if( isset($url) && file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
            // if exists set as new controller
            $this->currentController = ucwords($url[0]);

            // unset index 0
            unset($url[0]);
        }

        // require the controller 
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        //check for second path of url
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod= $url[1];
                unset($url[1]);
            }
        }

        
        $this->params = $url ? array_values($url) : [''];

        //call a callback with array of params
        // https://www.php.net/manual/en/function.call-user-func-array.php
        // if(count($this->params) > 0) {
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        // }
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