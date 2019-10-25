<?php  
require_once("Data.php");
require_once("SQLConnection.php");
$sqlconnection = new SQLConnection();
$sqlconnection->OpenCon();
$sqlconnection->GETTable();
$result = $sqlconnection->GETTable();
$data = new Data($result["guests"], $result["sum_imc"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../lib/bootstrap.min.css" type="text/css" rel="stylesheet" >

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
    </head>
    <body>
        <!-- As a link -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">IMC</a>
        </nav>
        <div class="container-fluid" style="margin-top: 10px">
            <div class="card">
                <div class="card-header">
                    Calcule seu IMC
                </div>
                <div class="card-body">
                    <form action="calcularIMC.php" method="POST">
                        <div class="form-group">
                            <label for="altura">Altura(M)</label>
                            <input type="number" class="form-control" id="altura" name="altura" aria-describedby="emailHelp" required="required" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="peso">Peso(Kg)</label>
                            <input type="number" class="form-control" id="peso" name="peso" aria-describedby="emailHelp" required="required " step="0.01">
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" type="submit">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div  class=" text-center justify-content-center py-5">
                <img style="width: 500px;" src="src/img/romao.jpg" alt="Romão">
            </div>
        </div>
<!-- Footer -->
<footer class="page-footer font-small pt-4 lighten-5 fixed-bottom">
    <div style="background-color: #6351ce">
    <div class="d-flex flex-column align-items-center" style="color: #fff;">
        <p>Há um total de <?= $data->getGuests();?> requisições de cálculos de IMC</p>
        <p>A média de IMC dos usuários que utilizaram esta calculadora é de <?= round($data->CalculateData(), 2);?></p>
    </div>
    </div>
  <div style="background-color: #ccc;">
      <!-- Grid row-->
      <div class="footer-copyright text-center py-1">
        <!-- Grid column -->
        © 2019 Copyright <a href="https://github.com/KZTN">KZTN - TSI</a>
    </div>
    </div>
</footer>
<!-- Footer -->
        <script src="../lib/bootstrap.min.js"></script>
    </body>
</html>
