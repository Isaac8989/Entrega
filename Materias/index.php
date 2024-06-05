<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <?php
    require_once 'dbM.php';

    if(isset($_GET['buscar'])){
        $detalle_materia = search($_GET['buscar']);
    }else{
        $detalle_materia = getMaterias();
    };


    ?>
    <table class="table table-striped-columns">
        <tr>
            <th>
                Materia
            </th>
            <th>
                Profesor
            </th>
        </tr>
        <?php
        foreach($detalle_materia as $materia){
            ?>
        <tr>
            <td>
                <?=$materia->Nombre?>
            </td>
            <td>
               <?=$materia->Profesor?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

    <form action="index.php" method="GET">
        <input type="search" name="buscar"  id="buscar" placeholder="Buscar" class="form-control">
        <button class="btn btn-success">Buscar</button>
    </form>
    </div>
</body>
</html>