<?php

    /**
    * The products page model
    */
    require("database.php");
    class ProductsModel
    {

        private $message = 'Welcome to Home page.';
        private $result;
        private $user = "Detta är min användare!";
        private $db;
        

        function __construct()
        {
            $this->db = new Dbconnect;
        }

        public function printProducts(){
            $result = $this->result;
            $result = mysqli_query($this->db->getDbConnect(),"SELECT * FROM product");
            $data = mysqli_fetch_array($result);
            echo "<div class='rowWrapper'>";
            while( $data = mysqli_fetch_array($result)){
              
                include "templates/products.tpl"  ;
            }
            echo "</div>";
               
              
        }
        public function printUsers(){
            $result = $this->result;
            $result = mysqli_query($this->db->getDbConnect(),"SELECT * FROM user WHERE userId = 24");
            $data = mysqli_fetch_array($result);
            
            echo "<h1>Välkommen tillbaka " .ucfirst($data['userFirstName']). ' ' .ucfirst($data['userLastName']).'</h1>';
           return $this->user;
            
             
            

        }

    }