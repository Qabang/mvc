<?php

/*databas connection*/

class DbConnect{
    private $dbhost='localhost';
    private $dbusername='root';
    private $dbpassword='';
    private $dbname='webbshop';

    function getDbConnect(){
        $con = mysqli_connect($this->dbhost,$this->dbusername,$this->dbpassword,$this->dbname) or die("Couldn't connect");
        mysqli_set_charset($con,"utf8");
        return $con;
    }

}