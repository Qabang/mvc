<?php

    /**
    * The home page view
    */
    class registerView
    {

        private $model;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;

            print "Register page - ";
            //ifsats med inloggad eller logga in?
            // loginUser();

        }
       
        public function render(){
            require_once( "templates/register.tpl"); 
        }

        // public function login(){
        //     return $this->controller->loginUsers();
            
        // }
        public function register(){
            $reg = $this->model->registerUserValidation();
            // $this->render(); 
            // header("LOCATION: /mvc-test/login");
            if($reg == 'regOkay'){
                //loggar in och skickar användaren till /index sidan
                header("LOCATION: /mvc-test/login/firstLogin");
                // echo "registrerad!";

            }else{
                //om inloggningsuppgifterna inte finns i databasen, stoppar inloggningen
                echo "inte registrerad";
               
            }
        }
    }