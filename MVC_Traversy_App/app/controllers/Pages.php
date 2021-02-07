<?php 

class Pages extends Controller {
    public function __construct(){
    
    }

    public function index(){
        // $this->view('hello');
        echo 'index now';
    }

    public function about($id){
        $this->view('hello');
echo  $id;
    }
}