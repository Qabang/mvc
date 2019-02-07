<?php

    /**
    * The home page controller
    */
    // $database = new Dbconnect;
   
    class ProductsController
    {
        private $model;
        private $db;

        function __construct($model)
        {
            $this->model = $model;
            
        }

        public function displayProducts()
        {
            return $this->model->printProducts();
        }

        public function getUsers(){
            return $this->model->printUsers();
            
        }

    }