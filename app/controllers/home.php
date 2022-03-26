<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
       
    }

    function index(){

       $this->view("index");

    }
    function basket(){

        $this->view("basket");
 
     }
     function catogry(){

        $this->view("catogry");
 
     }
     function buy(){

        $this->view("buy");
 
     }
     function detials(){

        $this->view("detials");
 
     }

}
?>