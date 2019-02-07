<?php

    /**
    * The product page view
    */
    class ProductsView
    {

        private $model;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;

            print "Products - ";
        
        }
        public function render(){
            return $this->controller->displayProducts();
            // require( "templates/homeInl.tpl"); 
        }

        public function index(){
        //   require("templates/homeNotInl.tpl");
            echo"kommer detta med?</br>";
            return $this->controller->sayWelcome();
        }

        public function action()
        {   
            return $this->controller->takeAction();
        }
        public function users(){
            return $this->controller->getUsers();
            
        }
    }