<?php

function getmate(){
    
    $db = new PDO('mysql:host=localhost;dbname=materias;charset=utf8','root', '');

    $sentencia = $db->prepare("select * from detalle_materia");
    $sentencia->execute();
    $mate = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $mate;
}

function addmate($Id, $Nombre, $Profesor){
    $db = getDB();
    $sentencia = $db->prepare("insert into pago(Id, Nombre, Profesor) values(?, ?, ?)");
    $sentencia->execute([$Id, $Nombre, $Profesor]);

    return $db->lastInsertId();
}

function searchmate(){

$db = SearchDB();
$nombre = 'I%';
$stsentenciamt = $conn->prepare('SELECT * FROM usuarios WHERE nombre LIKE :nombre');
$sentencia->bindParam('nombre', $nombre);
$sentencia->execute();

return $db->null();

}