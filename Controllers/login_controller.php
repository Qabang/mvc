<?php

    /**
    * The home page controller
    */
    // $database = new Dbconnect;
   
    class LoginController
    {
        private $model;
        private $db;

        function __construct($model)
        {
            $this->model = $model;
            
        }

        public function getUsers(){
            return $this->model->printUsers();
            
        }
        public function loginUsers(){
            return $this->model->loginUser();
            
        }

    }