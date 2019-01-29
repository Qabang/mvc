<?php

    /**
    * The home page view
    */
    class LoginView
    {

        private $model;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;

            print "Login - ";
            //ifsats med inloggad eller logga in?
            // loginUser();
           
              require_once( "templates/login.tpl");  
            
            
        }
        public function index()
        {
            return $this->controller->sayWelcome();
        }

        public function users(){
            return $this->controller->getUsers();
            
        }
        public function login(){
            return $this->controller->loginUsers();
            
        }
    }