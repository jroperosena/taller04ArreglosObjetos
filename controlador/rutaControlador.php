<?php


require ("../clases/enrutamiento.php");
$enrutar = new servicioRutas();


 if (isset($_GET[opc]))
    $vista =$enrutar ->Ruta($_GET[opc]);

    /*
if (isset($_GET[subOpc]))
    $subVista =$enrutar ->SubRuta($_GET[subOpc]);
*/

require ("../vistas/layout.php")

?>
