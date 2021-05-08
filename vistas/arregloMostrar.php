<?php

/*
echo "<pre>";
var_dump($lista);
echo "</pre>";
*/

echo "<table id='customers'>";
echo "<tr>";
echo "<th> Nombres </th>";
echo "</tr>";
foreach  ($lista as $e) {

    echo "<tr>";
    echo "<td>".$e."</td>";
    echo "<tr>";

}

echo "</table>";

?>