<?php
    class Receita1{
        const v1=1;
        public static $v2=2;

        public static function Mostrar(){
            echo self::v1;
            echo 'resultado';
            echo self::$v2;
        }
    }
        
    echo Receita1::v1;
    echo Receita1::$v2;
    echo Receita1::Mostrar();

?>