<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
</head>
<body>
    <?php

   require_once 'db.php';

   function listarpago()
   {
    $pague = getpago();
    ?>
    <ul>
    
    <?php foreach($pague as $pago)
    {

        echo '<li>'.$pago->Deudor.'</li>';
        
    }
    ?>
     </ul>
     <?php
   }

   listarpago();

   if ($_SERVER['REQUEST_METHOD'] === 'POST') 
   {

    $Deudor = $_POST['Deudor'];
    $Cuota = $_POST['Cuota'];
    $Cuota_Capital = $_POST['Cuota_Capital'];
    $Fecha_Pago = $_POST['Fecha_Pago'];

    addpago($Deudor, $Cuota, $Cuota_Capital, $Fecha_Pago);

    header('Location: index.php');
}
// if (isset($_GET['delete'])) {
//     deleteTarea($_GET['delete']);
//     header('Location: index.php');
// }

// if (isset($_GET['complete'])) {
//     completeTarea($_GET['complete']);
//     header('Location: index.php');
// }

?>
    

    <form>

    <form action="index.php" method="post">
            <div>
                <label for="Deudor" class="form-label">Deudor</label>
                <input type="text" name="deudor" id="deudor" class="form-control">
            </div>
            <div>
            <label for="Cuota" class="form-label">Cuota</label>
                <input type="number" name="cuota" id="cuota" class="form-control">
            </div>
            <div>
            <label for="Cuota_Capital" class="form-label">Cuota Capital</label>
                <input type="number" name="cuota_capital" id="cuota" class="form-control">
            </div>
            <div>
            <label for="Fecha_Pago" class="form-label">Fecha Pago</label>
                <input type="datetime" name="Fecha_Pago" id="Fecha_Pago" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>


    </form>

</body>
</html>