<?php

    /**
    * The register page controller
    */
    
   
    class RegisterController
    {
        private $model;
        private $db;

        function __construct($model)
        {
            $this->model = $model;
            
        }

    
        // public function loginUsers(){
        //     return $this->model->loginUser();
            
        // }
        public function registerValidationUsers(){
            return $this->model->registerUserValidation();
        }


    }