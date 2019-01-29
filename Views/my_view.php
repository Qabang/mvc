<?php

class MyView{
    private $vari;

    private $cont;

    function __construct($c, $v){
        $this->cont = $c;
        $this->vari = $v;

        print "Bra jobbat - ";

    }
    
    public function hej(){
        return $this->vari->somethingMessage();
    }
    public function code(){
        return $this->vari->kod();
    }
}