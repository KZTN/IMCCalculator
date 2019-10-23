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
        </div>
        <script src="bootstrap.min.js"></script>
    </body>
</html>
