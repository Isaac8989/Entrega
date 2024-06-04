<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
    <?php

   require_once 'dbM.php';

   function listarMaterias()
   {
    $dmadd = getmate();
    ?>
    <ul>
    
    <?php foreach($dmadd as $detalle_materia)
    {

        echo '<li>'.$detalle_materia->Nombre.'</li>';
        
    }
    ?>
     </ul>
     <?php
   }

   listarMaterias();

   if ($_SERVER['REQUEST_METHOD'] === 'POST') 
   {

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Profesor = $_POST['Profesor'];
   
    addpago($Id, $Nombre, $Profesor);

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
                <label for="Id" class="form-label">Id</label>
                <input type="number" name="Id" id="Id" class="form-control">
            </div>
            <div>
            <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control">
            </div>
            <div>
            <label for="Profesor" class="form-label">Profesor</label>
                <input type="text" name="Profesor" id="Profesor" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>


    </form>

</body>
</html>