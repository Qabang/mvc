<?php

/*
my first very own controller
*/

class MyController
{
    private $variabel;

    function __construct($variabel){

        $this->variabel = $variabel;

    }

    public function saySomething(){
        return $this->variabel->somethingMessage();
    }
}