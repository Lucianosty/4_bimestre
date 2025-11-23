<?php
include_once ('Operacao.php');
 class OperacaoDAO{
    public function acao(Operacao $o){
        switch ($o ->getOp()) {
            case 'soma':
                return $o -> getv1() + $o->getV2();
                break;
            
            case 'sub':
                return $o -> getv1() - $o->getV2();
                break;
            case 'mult':
                return $o -> getv1() * $o->getV2();
                break;
            case 'div':
                return $o -> getv1() / $o->getV2();
                break;
        }
    }
}
?>