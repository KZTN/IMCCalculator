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
