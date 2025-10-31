<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>pag_cheque</title>
</head>
<body>

<script type="text/javascript">
    function data(valor) {
        if (valor == 2) {
            document.getElementById("comum").style.display = 'block';
            document.getElementById("especial").style.display = 'none';
        } else if (valor == 3) {
            document.getElementById("comum").style.display = 'none';
            document.getElementById("especial").style.display = 'block';
        }
    }
</script>

<form method="post">
    Selecione o Tipo do cheque<br>
    <input type="radio" name="cheque" value="comum" onclick="data(2)">Cheque Comum<br>
    <input type="radio" name="cheque" value="especial" onclick="data(3)">Cheque Especial<br>

    <input type="text" name="txtv" placeholder="Valor cheque comum" id="comum" style="display:none;">
    <input type="text" name="txtvl" placeholder="Valor cheque especial" id="especial" style="display:none;">

    <input type="submit" value="Calcular">
</form>

<?php
if ($_POST) {
    include_once ("./ChequeC.php");
    include_once ("./ChequeE.php");

    $c = new ChequeC();
    $e = new ChequeE();

    $valor = $_POST['txtv'];
    $valor1 = $_POST['txtv1'];
    $tipo = $_POST['cheque'];

    if ($tipo == 'comum') {
        $c->setValor($valor);
        echo 'Valor cheque comum é ' . $c->calculaJuros();
    } else if ($tipo == 'especial') {
        $e->setValor($valor1);
        echo 'Valor cheque especial é ' . $e->calculaJuros();
    } else {
        echo 'Opção inválida';
    }
}
?>
</body>
</html>

</body>
</html>
