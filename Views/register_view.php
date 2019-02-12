<?php

    /**
    * The register page view
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

        }
       
        public function render(){
            require_once( "templates/register.tpl"); 
        }
 
        // }
        public function register(){
            $reg = $this->model->registerUserValidation();
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