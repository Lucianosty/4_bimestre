<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="Post">
        <input type="text" name="valorDeposito" placeholder="Digite o valor a ser investido">
        <input type="number" name="mesInvestimento" placeholder="Digite a quantidade de mês" id="">

        <select name="tipoInvestimento" id="">
            <option value="">Selecione o Investimento</option>
            <option value="Poupanca">Poupanca</option>
            <option value="Fundo">Fundo</option>
        </select>
        <input type="submit">
    </form>
    <?php

    require_once 'ClassePolimor.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = $_POST['valorDeposito'];
        $meses = $_POST['mesInvestimento'];
        $tipoInvestimento = $_POST['tipoInvestimento'];

if ($tipoInvestimento == 'Poupanca') {
    $investimento1 = new Poupança();
    $investimento1->setValor($valor);
    $investimento1->setMeses($meses);
    $resultado = $investimento1->CalcularPoupanca();
    if ($resultado !== null) {
        echo "<p>";
        echo "O valor a ser adquirido durante o período definido, ao investir na poupança, é de: ";
        echo "R$ " . $resultado;
        echo "</p>";
    }
} else if ($tipoInvestimento == 'Fundo') {
    $investimento1 = new Fundo();
    $investimento1->setValor($valor);
    $investimento1->setMeses($meses);
    $investimento1->CalcularFundo();
    $resultado = $investimento1->CalcularFundo();
    if ($resultado !== null) {
        echo "<p>";
        echo "O valor a ser adquirido durante o período definido, ao investir no fundo, é de: ";
        echo "R$ " . $resultado;
        echo "</p>";
    }
}
 else {
            echo "Selecione uma opção";
        }
    }
    ?>

</body>

</html>