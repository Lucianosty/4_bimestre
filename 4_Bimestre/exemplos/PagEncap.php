<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacoes</title>
</head>
<body>
    <center>
    <h1>Calculadora</h1>
    <form action="" method="post">
        <input type="text" name="v1" placeholder="Digite o valor 1"><br><br>;
        <input type="text" name="v2" placeholder="Digite o valor 2"><br><br>;
        <select name="op" id="">
            <option value="soma">Soma</option>
            <option value="sub">Soma</option>
            <option value="mult">Soma</option>
            <option value="div">Soma</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
if ($_POST) {
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $op = $_POST['op'];
    include_once("Operacao.php");
    include_once("OperacaoDAO.php");
    $o = new Operacao();
    $oDAO = new OperacaoDAO();

    $o->setv1($v1);
    $o->setv1($v2);
    $o->setv1($op);
    echo $oDAO->acao($o);
}
?>
    </center>
</body>
</html>

