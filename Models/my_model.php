<?php

class MyModel{
    private $msg = 'Detta har jag gjort själv';

    function __construct(){

    }

    public function somethingMessage(){
        return $this->msg;
    }

    public function kod(){
        include "templates/kod.tpl";
        return;
        
    }
}