<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soma</h1>
    <form action="" method="post">
        <input type="text" name="v1" placeholder="Digite o valor 1"><br><br>;
        <input type="text" name="v2" placeholder="Digite o valor 2"><br><br>;
        <input type="text" name="v3" placeholder="Digite o valor 3"><br><br>;

        <input type="submit" value="Calcular">
    </form>

    <?php
if ($_POST) {
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];

    include_once('Soma3.php');
    include_once('SomaDAO.php');

    $s = new Soma3();
    $sDAO = new SomaDAO();

    $s->setV1($v1);
    $s->setV2($v2);
    $s->setV3($v3);

    echo $sDAO->acao($s);
}
?>

</body>
</html>

