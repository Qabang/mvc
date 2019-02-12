<?php

    /**
    * The home page model
    */
    require("database.php");
    class IndexModel
    {

        private $message = 'Welcome to Home page.';
        private $result;
        private $db;
        

        function __construct()
        {
            $this->db = new Dbconnect;
        }

        public function welcomeMessage()
        {
            return $this->message;
        }
        public function printUsers(){
            $result = $this->result;
            $result = mysqli_query($this->db->getDbConnect(),"SELECT * FROM user WHERE userId = 24");
            $data = mysqli_fetch_array($result);
            
            echo "<h1>Välkommen tillbaka " .ucfirst($data['userFirstName']). ' ' .ucfirst($data['userLastName']).'</h1>';
           return ;
            
             
            

        }

    }