<?php
        function getDB(){
            $db = new PDO ('mysql:host=localhost;dbname=materias;charset=utf8', 'root', '');
            return $db;
        }

        function getMaterias(){
            $db = getDB();
            $sentencia = $db->prepare("select * from detalle_materia");
            $sentencia->execute();
            $detalle_materia = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $detalle_materia;
        }

        function search($buscado){
            $db = getDB();
            $sentencia = $db->prepare("select * from detalle_materia where nombre like ?");
            $sentencia->execute(['%' . $buscado . '%']);
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
