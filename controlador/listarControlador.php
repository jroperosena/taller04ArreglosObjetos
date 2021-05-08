<?php



$path ="../assets/json/listaPersonas.json";

// validando si existe el archivo y es caso que si crea la lista con esos datos
    if(file_exists($path)) {
        $datosLista = file_get_contents($path);
        $lista= json_decode($datosLista, true);
     } else {
        $lista=[];
     }

       $vista="listar.php";
       require ("../vistas/layout.php");




?>
