<?php
    function getDB(){
        $db = new PDO ('mysql:host=localhost;dbname=db_pagos;charset=utf8', 'root', '');
        return $db;
    }

    function getDeudas(){
        $db = getDB();
        $sentencia = $db->prepare("select * from pago");
        $sentencia->execute();
        $deudas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $deudas;
    }

    function addDeudas($Deudor, $Cuota, $Cuota_capital, $Fecha_Pago){
        $db = getDB();
        $sentencia = $db->prepare("INSERT INTO pago (Deudor, Cuota, Cuota_capital, Fecha_Pago) VALUES(?, ?, ?, ?)");
        $sentencia->execute([$Deudor, $Cuota, $Cuota_capital, $Fecha_Pago]);
    }

?>