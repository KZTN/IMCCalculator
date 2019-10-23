<?php
require_once('IMC.php');
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
                    <?php
                    $imc = new IMC($_POST['peso'], $_POST['altura']);
                    ?>
                    <h3>Seu IMC é: <?php echo $imc->calcular(); ?></h3>
                    <h3>Você está <?php echo $imc->mensagem(); ?></h3>
                </div>
            </div>
        </div>
        <script src="bootstrap.min.js"></script>
    </body>
</html>
