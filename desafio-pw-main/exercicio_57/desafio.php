<?php
    class ex1{
         const nome = "Luciano Afonso Rodrigues de Fatima Bernardes";
         public $num1;
         public $num2;

        public function Somar($num1,$num2){
            return $num1 + $num2;

        }

        public function get_Nome(){
            return self::nome;
        }
    }
        $obj1 = new ex1;
        $obj1->num1 = 15;
        $obj1->num2 = 18;

        echo "O resultado da operação é: ". $obj1->Somar($obj1->num1,$obj1->num2) . "<br>";
        echo "O seu lindo nome é ". $obj1::nome;  


?>