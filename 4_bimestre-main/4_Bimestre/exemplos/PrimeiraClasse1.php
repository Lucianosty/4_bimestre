<?php

class PrimeiraClasse
{
    public $a=1;
    public $b=2;
    public $c=3;

    public function Mensagem(){
        echo "<br> Exibindo mensagem 2 DS";
    }
    public function Mensagem2(){
        return "<br> Exibindo mensagem de retorno do 2 DS";
    }
    public function Mensagem3($nome){
        return '<br>Exibindo o nome do(a): '. $nome;
    }
}

// $lucas = new PrimeiraClasse();
// $teste = new PrimeiroClasse();

$obj1 = new PrimeiraClasse();

$obj1 -> a = 5;

$obj2 = new PrimeiraClasse();

$obj2 -> a = 10;

echo ("Valor de a no obj1 $obj1->a");
echo ("<br>Valor de a no obj2 $obj2->a");
$obj1 -> Mensagem();
echo ($obj1->Mensagem2());
echo ($obj1->Mensagem3('Leticia'));
?>