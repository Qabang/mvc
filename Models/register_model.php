<?php

    /**
    * The home page model
    */
    require("database.php");
    class RegisterModel
    {
        private $result;
        private $user = "Detta är min användare!";
        private $db;
        

        function __construct()
        {
            $this->db = new Dbconnect;
        }
      
        public function registerUserValidation(){
            if(isset($_POST['submit'])){

                $error = 0;//variabel för att kolla efter fel i formuläret
            
                //Kontrollerar Förnamn
                if(isset($_POST['Firstname'])&& $_POST['Firstname']<>''){ //<> betyder skiljt ifrån inte Tomt. samma som !=
                    $Firstname = strip_tags($_POST['Firstname']);
                    $Firstname = trim($Firstname);
                    $Firstname = stripslashes($Firstname);
            
                    
                }else{
                    echo 'Du har inte fyllt i förnamn, ';
                    $error = 1;
                }
            
                //Kontrollerar Efternamn
                if(isset($_POST['Lastname'])&& !empty($_POST['Lastname'])){ //samma som ovanstående fungerar båda sätt
                    $Lastname = strip_tags($_POST['Lastname']);
                    $Lastname = trim($Lastname);
                    $Lastname = stripslashes($Lastname);
                    
                }else{
                    echo 'Du har inte fyllt i efternamn, ';
                    $error = 1;
                }
            
                //kontrollerar email
                if(isset($_POST['Email'])&& $_POST['Email']<>''){ //<> betyder skiljt ifrån inte Tomt. samma som !=
                    $Email = trim(strip_tags($_POST['Email']));
                    $Email = stripslashes($Email);
                    
                }else{
                    $Email = null;
                    echo 'Du har inte fyllt i Epostadress, ';
                    $error = 1;
                }
            
                //kontrollerar Lösen
                if(isset($_POST['Password'])&& $_POST['Password']<>''){ //<> betyder skiljt ifrån inte Tomt. samma som !=
                    $Password = strip_tags($_POST['Password']);
                    //Kollar så läsenordet är längre än 6 tecken
                    if(strlen($Password)<6){
                        echo "Lösenordet är för kort, minst 6 tecken";
                        $error = 1;
                    }
                   
                    //kollar om lösen har stor bokstav
                    if(!preg_match("#[A-Z]+#", $Password)){
                        echo "<font color=red>Lösenordet måste innehålla en stor bokstav, </font>";
                        $error =1;
                    }
                       //kollar om lösen har några siffror
                       if(!preg_match("#[0-9]+#", $Password)){
                        echo "<font color=red>Lösenordet måste innehålla <b>en siffra</b></font>, ";
                        $error =1;
                    }
                    
                }else{
                    $Password = null;
                    echo 'Du har inte fyllt i Lösenord!, ';
                    $error = 1;
                }
                 //kontrollerar Lösen igen
                 if(strcmp($Password,$_POST['Password2']) == 0){
                     $Password = sha1($Password);
                    
                }else{
                    echo '<font color="red">Lösenordet matchar inte!</font>, ';
                    $error = 1;
                }
                
                $result = mysqli_query($this->db->getDbConnect(),"SELECT * FROM user  WHERE userEmail = '$Email' LIMIT 1");
                //Om Error inte är lika med 1 = inga errors -> koppla upp och läggtill mot databas
                if(mysqli_num_rows($result) > 0){
                    echo "<br/> En Användare Med Den Emailadressen Finns Redan Registrerad<br/>";
                    echo "<a href='/mvc-test/login'>Gå till login</a><br/>";
                    
                    // echo "Registrerat användaren!";
                }else if($error != 1){
                    $this->registerUser($Firstname,$Lastname,$Email,$Password);
                    return "regOkay";


                }else{
                    echo " - Finns fel i formuläret åtgärda dessa innan du kan gå vidare";
                    echo "<a href='/mvc-test/register'>Tillbaka till registreringen</a>";
                    return "notReg";
                }
            }

        }

        private function registerUser($Firstname,$Lastname,$email,$newPassword){

            mysqli_query($this->db->getDbConnect(),"INSERT INTO user (userFirstName,userLastName, userEmail, userPassword, userAdmin)
            VALUES ('$Firstname','$Lastname','$email','$newPassword', '0')");
                      

            

        }










 // stänger classen!
    }