<?php

class exercicio1 {

    public $nome = "Luciano";
    public $n1;
    public $n2;

    public function Somar($n1, $n2){
        return $n1 + $n2;
    }

    public function get_Nome(){
        return $this->nome;
    }
}

$obj1 = new exercicio1();
$obj1->n1 = 5;
$obj1->n2 = 10;
$obj1->Somar($obj1->n1, $obj1->n2);

echo "A soma dos dois números é " . $obj1->Somar($obj1->n1, $obj1->n2) . "<br>";
echo "Seu lindo nome é "  . $obj1->get_Nome() . "<br>";


//$obj2 = new execicio1();
//$obj2->n2 = 4;
//echo "O valor de n2 no obj 2 é $obj2 -> n2 ";

//$obj3 = new exercicio1();
//echo "O valor de referência é"

?>