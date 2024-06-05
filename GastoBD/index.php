<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Pagos</h1>
    <?php
    require_once 'db.php';

    function listarPagos()
    {
        $deudas = getDeudas();
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Deudor</th>
                    <th>Cuota</th>
                    <th>Cuota Capital</th>
                    <th>Fecha de Pago</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($deudas as $deuda) : ?>
                    <tr>
                        <td><?= $deuda->id ?></td>
                        <td><?= $deuda->Deudor ?></td>
                        <td><?= $deuda->Cuota ?></td>
                        <td><?= $deuda->Cuota_capital ?></td>
                        <td><?= $deuda->Fecha_Pago ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php
    }

    listarPagos();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Deudor = $_POST['Deudor'];
        $Cuota = $_POST['Cuota'];
        $Cuota_capital = $_POST['Cuota_capital'];
        $Fecha_Pago = $_POST['Fecha_Pago'];

        addDeudas($Deudor, $Cuota, $Cuota_capital, $Fecha_Pago);

        header('Location: index.php');
    }
    ?>
    <form action="index.php" method="post">
        <div>
            <label for="Deudor" class="form-label">Deudor</label>
            <input type="text" name="Deudor" id="Deudor" class="form-control">
        </div>
        <div>
            <label for="Cuota" class="form-label">Cuota</label>
            <input type="number" name="Cuota" id="Cuota" class="form-control">
        </div>
        <div>
            <label for="Cuota_capital" class="form-label">Cuota Capital</label>
            <input type="number" step="0.01" name="Cuota_capital" id="Cuota_capital" class="form-control">
        </div>
        <div>
            <label for="Fecha_Pago" class="form-label">Fecha de Pago</label>
            <input type="date" name="Fecha_Pago" id="Fecha_Pago" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
    </form>
</div>

</body>
</html>