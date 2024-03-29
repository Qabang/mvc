<?php

    /**
    * The index page controller
    */
 
   
    class IndexController
    {
        private $model;
        private $db;

        function __construct($model)
        {
            $this->model = $model;
            
        }

        public function sayWelcome()
        {
            return $this->model->welcomeMessage();
        }

        public function getUsers(){
            return $this->model->printUsers();
            
        }

    }