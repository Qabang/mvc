<?php

    /**
    * The index page view
    */
    class IndexView
    {

        private $model;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;

            print "Home - ";
        }
        public function render(){
            require( "templates/homeInl.tpl");
            include("Views/products_view.php") ;
        }

        public function index(){
          require("templates/homeNotInl.tpl");
            // echo"kommer detta med?</br>";
            // return $this->controller->sayWelcome();
        }

        public function action()
        {   
            return $this->controller->takeAction();
        }
        public function users(){
            return $this->controller->getUsers();
            
        }
    }