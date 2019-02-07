<?php

    /**
    * The home page model
    */
    require("database.php");
    // require_once("Views/login_view.php");
   
    class LoginModel
    {
        private $result;
        private $user = "Detta är min användare!";
        private $db;
        

        function __construct()
        {
            $this->db = new Dbconnect;
            // $this->logSuccess = new loginView;
        }
      
             
         public function loginUserQuery($email,$password){

            $result = $this->result;
            $result = mysqli_query($this->db->getDbConnect(),"SELECT * FROM user  WHERE userEmail = '$email' AND userPassword = '$password' LIMIT 1");
            // $data = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) > 0){
                // $this->changeView("index");
                // echo "<h1>Välkommen tillbaka " .ucfirst($data['userFirstName']). ' ' .ucfirst($data['userLastName']).'</h1>';

                return "login";
            }else{
                
                echo "Ajdå felaktiga uppgifter";
                echo '<br><a href="/mvc-test/login">Tillbaka</a>';
                return "inte inloggad";

            }
         }

         public function changeView($path){
                // echo $path;
                header("LOCATION: /mvc-test/".$path);
         }


         public function loginUser(){
            if(isset($_POST['email']) && isset($_POST['userPassword'])){
            
            
                if($_POST['email'] == ''||$_POST['userPassword'] == '')
                { 
                    echo 'user saknas eller lösenord saknas <br> <br><a href="/mvc-test/login">Tillbaka</a>';
                    //die;
                }else{
                    $email = $_POST['email'];
                    $password = sha1($_POST['userPassword']);

                    return $this->loginUserQuery($email, $password);  
                    
                }       
                
                return "logcheck";
                
            
         }else{
             echo "Inte inloggad";
            
         }
        }

    }