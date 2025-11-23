<?php

class ExEncapsulamento{
    private $v1;
    private $v2;
    private $total;

    public function getv1(){
        return $this->$v1;
    }
    public function setv1(){
        $this->$v1 = $value;
    }
    public function getv2(){
        return $this->$v2;
    }
    public function setv2(){
        $this->$v2 = $value;
    }
    public function getv2(){
        return $this->$op;
    }
    public function setv2($value){
        $this->$op = $value;
    }
}

?>