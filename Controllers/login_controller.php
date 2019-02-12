<?php

    /**
    * The login page controller
    */
   
   
    class LoginController
    {
        private $model;
        private $db;

        function __construct($model)
        {
            $this->model = $model;
            
        }

    
        public function loginUsers(){
            return $this->model->loginUser();
            
        }

    }