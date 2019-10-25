<?php
require_once("IMC.php");
require_once("Data.php");
require_once("SQLConnection.php");
$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT);
$altura = filter_input(INPUT_POST, "altura", FILTER_VALIDATE_FLOAT);

if(!$peso || !$altura) {
    header('Location: index.php');
    exit(0);
}

$sqlconnection = new SQLConnection();
$sqlconnection->OpenCon();
$result = $sqlconnection->GETTable();
$data = new Data($result["guests"], $result["sum_imc"]);
$imc = new IMC($peso, $altura);
$data->incrementaIMC($imc->calcular());
$sqlconnection->InsertTable($data->getGuests(), $data->getSum_imc());
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Primary Meta Tags -->
        <title>Calculadora de Romão</title>
        <meta property="description" content="A balança já não te dá o peso, te dá os pêsames...">
        <meta property="title" content="Calculadora de Romão">
        <meta property="type" content="website">
        <meta property="url" content="https://calculadoraimc.herokuapp.com/">
        <meta property="image" content="https://calculadoraimc.herokuapp.com/src/img/romao.jpg">

        <meta property="og:title" content="Calculadora de Romão">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://calculadoraimc.herokuapp.com/">
        <meta property="og:description" content="A balança já não te dá o peso, te dá os pêsames...">
        <meta property="og:image" content="https://calculadoraimc.herokuapp.com/src/img/romao.jpg">
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="600" />
        <div id='hidden' style='display:none;'><img src="https://calculadoraimc.herokuapp.com/src/img/romao.jpg"></div>



        <link href="../lib/bootstrap.min.css" type="text/css" rel="stylesheet" />
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
                <div class="card-body justify-content-center text-center">
                    <h3>Seu IMC é: <?= number_format($imc->calcular(), 2) ?></h3>
                    <h3><?= $imc->mensagem() ?></h3>
                    <?php 
                        $sort = rand(1, 3);
                        if($imc->mensagem() == "Você está com sobrepeso") {
                            echo("<img style='width: 300px;'src='src/img/gatogordo$sort.jpg'>");
                        }
                        if($imc->mensagem() == "Você está abaixo do peso") {
                            echo("<img style='width: 300px;'src='src/img/gatomagro$sort.jpg'>");
                        }
                        if($imc->mensagem() == "Seu peso está normal") {
                            echo("<img style='width: 300px;'src='src/img/gatonormal$sort.jpg'>");
                        }
                        if($imc->mensagem() == "Você está obeso") {
                            echo("<img style='width: 300px;'src='src/img/gatoobeso$sort.jpg'>");
                        }
                    ?>
                </div>
            </div>
            <div class="text-center py-5">
            <form action="index.php" method="post">
                <button class="btn btn-success" type="submit">Voltar ao início</button></form></div>

        </div>
        <footer class="page-footer font-small pt-4 lighten-5 fixed-bottom">

  <div style="background-color: #ccc;">
      <!-- Grid row-->
      <div class="footer-copyright text-center py-1">
        <!-- Grid column -->
        © 2019 Copyright <a href="https://github.com/KZTN">KZTN - TSI</a>
    </div>
    </div>
</footer>
        <script src="../lib/bootstrap.min.js"></script>
    </body>
</html>
