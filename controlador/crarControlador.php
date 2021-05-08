<?php

require '../clases/persona.php';

$path ="../assets/json/listaPersonas.json";

// validando si existe el archivo y es caso que si crea la lista con esos datos
    if(file_exists($path)) {
        $datosLista = file_get_contents($path);
        $lista= json_decode($datosLista, true);
     } else {
        $lista=[];
     }


if((isset($_POST['codigo'])) && (!empty($_POST['codigo'])) && (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && (isset($_POST['ciudad'])) && (!empty($_POST['ciudad'])) && (isset($_POST['telefono'])) && (!empty($_POST['telefono'])) ) {

  // si los datos esta validado creo el objeto

        $myPersona = new Persona($_POST['codigo'], $_POST['nombre'], $_POST['ciudad'],$_POST['telefono']);

        array_push($lista ,  $myPersona );

    

       // guardar en el json la lista
       $jsonString = json_encode($lista);
       file_put_contents($path,$jsonString);
       

       // decodifico de nuevo  para listarlo
       $lista= json_decode($jsonString, true);

       $vista="listar.php";
       require ("../vistas/layout.php");


} else {

    $vista="crear.php";
     require ("../vistas/layout.php");
    
} 



?>
