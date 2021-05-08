<?php

/*
echo "<pre>";
var_dump($lista);
echo "</pre>";
*/

echo "<table id='customers'>";
echo "<tr>";
echo "<th> Codigo </th>";
echo "<th> Nombre </th>";
echo "<th> Ciudad </th>";
echo "<th> Telefono </th>";
echo "</tr>";

foreach($lista as $per) {

    echo "<tr>";
    echo "<td>".$per['codigo']."</td>";
    echo "<td>".$per['nombre']."</td>";
    echo "<td>".$per['ciudad']."</td>";
    echo "<td>".$per['telefono']."</td>";
    echo "<tr>";

}

echo "</table>";

?>