<?php

function getpago(){
    
    $db = new PDO('mysql:host=localhost;dbname=db_pagos;charset=utf8','root', '');

    $sentencia = $db->prepare("select * from pago");
    $sentencia->execute();
    $pague = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $pague;
}

function addpago($Deudor, $Cuota, $Cuota_Capital, $Fecha_Pago){
    $db = getDB();
    $sentencia = $db->prepare("insert into pago(Deudor, cuota, cuota_capital, Fecha_Pago) values(?, ?, ?, ?)");
    $sentencia->execute([$Deudor, $Cuota, $Cuota_Capital, $Fecha_Pago]);

    return $db->lastInsertId();
}

