<?php

    /**
    * The home page view
    */
    class LoginView
    {

        private $model;

        private $controller;

        private $logSuccess = 0;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;

            print "Login - ";
                    
            
            
        }
        public function render(){
            require_once( "templates/login.tpl"); 
            
        }
     
        public function login(){
                //kör loginUser och sparar ned return resultatet i variabeln result
                $result=$this->controller->loginUsers();
                // echo $result;
           
                if($result == 'login'){
                    //loggar in och skickar användaren till /index sidan
                    header("LOCATION: /mvc-test/index");
                }else{
                    //om inloggningsuppgifterna inte finns i databasen, stoppar inloggningen
                   
                }

        }
        public function Firstlogin(){
            echo "Du blev registrerad! :) <br><br><br>";
            $this->render();
        }
        
    }