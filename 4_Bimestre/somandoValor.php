<?php
    class PrimeiraClasse {

        public $a = 1;
        public $b = 2;
        public $c = 3;

        public function Mensagem($a){
            return "Exibindo a mensagem da função com valor " . $a;
        }
        
        public function Referencia(){
            return $this -> a;

        }
    }

    $obj1 = new PrimeiraClasse();
    $obj1->a = 5;
    echo "O valor de A no objeto 1 é $obj1->a <br>";
    echo $obj1->Mensagem($obj1->a) . "<br>";

    $obj2 = new PrimeiraClasse();
    $obj2-> a = 9;
    echo "O valor de A no objeto 2 é $obj2->a <br>";

    $obj3 = new PrimeiraClasse();
    $x = 9 + $obj3->Referencia();
    echo "O valor de referencia é " . $obj3->Referencia() . "<br>";
    echo "O valor de referencia mais 9 é " . $x . "<br>";

?>