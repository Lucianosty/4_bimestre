<?php
    class Ex_Construtor{
        function __construct(){
            echo 'Exibindo mensagem do construtor';
            var_dump($this);
        }
    }
    $p1 = new Ex_Construtor();
    $p2 = new Ex_Construtor();
?>