<?php

    class Operacao{
        private $v1;
        private $v2;
        private $op;

        public function getv1(){
            return $this->$v1;
        }
        public function setv1($value){
            $this->$v1 = $value;
        }
        public function getv2(){
            return $this->$v2;
        }
        public function setv2($value){
            $this->$v2 = $value;
        }
        public function getOp(){
            return $this->$op;
        }
        public function setOp($value){
            $this->$op = $value;
        }
    }


?>