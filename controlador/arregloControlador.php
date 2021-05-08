<?php

$path ="../assets/json/arreglo.json";

// validando si existe el archivo y es caso que si crea la lista con esos datos
    if(file_exists($path)) {
        $datosLista = file_get_contents($path);
        $lista= json_decode($datosLista, true);
     } else {
        $lista=[];
     }




if(isset($_POST['nombre'])) {

    if(!empty($_POST['nombre'])) {

        array_push($lista, $_POST['nombre']);

        // guardar en el json la lista
        $jsonString = json_encode($lista);
        file_put_contents($path,$jsonString);

        $vista="arregloFormulario.php";
        


    } else {

      

        $vista="arregloMostrar.php";
       
    }

} else {

    $vista="arregloFormulario.php";
   

}
  

require ("../vistas/layout.php");



?>