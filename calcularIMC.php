<?php
require_once('IMC.php');

$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT);
$altura = filter_input(INPUT_POST, "altura", FILTER_VALIDATE_FLOAT);

if(!$peso || !$altura)
{
    header('Location: index.php');
    exit(0);
}

$imc = new IMC($peso, $altura);
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="bootstrap.min.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <!-- As a link -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">IMC</a>
        </nav>
        <div class="container-fluid" style="margin-top: 10px">
            <div class="card">
                <div class="card-header">
                    Resultado do seu IMC
                </div>
                <div class="card-body">
                    <h3>Seu IMC é: <?= number_format($imc->calcular(), 2) ?></h3>
                    <h3>Você está <?= $imc->mensagem() ?></h3>
                </div>
            </div>
        </div>
        <script src="bootstrap.min.js"></script>
    </body>
</html>
