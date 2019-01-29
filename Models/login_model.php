<?php

    /**
    * The home page model
    */
    require("database.php");
    class LoginModel
    {

        private $message = 'Welcome to Home -- page.';
        private $result;
        private $user = "Detta är min användare!";
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
           return $this->user;
         }
         
         public function loginUserQuery($email,$password){
            $result = $this->result;
            $result = mysqli_query($this->db->getDbConnect(),"SELECT * FROM user  WHERE userEmail = '$email' AND userPassword = '$password' LIMIT 1");
            $data = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) > 0){

            echo "<h1>Välkommen tillbaka " .ucfirst($data['userFirstName']). ' ' .ucfirst($data['userLastName']).'</h1>';
            }else{
                echo "Ajdå felaktiga uppgifter";
            }
         }
         public function loginUser(){
            if(isset($_POST['email']) && isset($_POST['userPassword'])){
            
            
                if($_POST['email'] == ''||$_POST['userPassword'] == '')
                { 
                    echo "user saknas eller lösenord saknas";
                    //die;
                }else{
                    $email = $_POST['email'];
                    $password = sha1($_POST['userPassword']);

                  $this->loginUserQuery($email, $password);  
                  
                }       
                
                
            
         }else{
             echo "Inte inloggad";
            
         }
        }

    }