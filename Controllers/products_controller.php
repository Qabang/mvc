<?php

    /**
    * The products page controller
    */
  
   
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