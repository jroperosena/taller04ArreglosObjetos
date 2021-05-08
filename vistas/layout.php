<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">            
    <link rel="stylesheet" href="../assets/css/misEstilos.css">
    <title>Document</title>
</head>

<body class="estiloBody">

    <header class="estiloHeader">
        <!-- header o encabezado-->
     
        <img class="imgIco" src="../assets/images/logoSena.png" alt="">
        <!-- header o encabezado-->
    </header>

    <main class="estiloMain">
     
    <h1 class="estiloH1">  Manejo de Arreglos / Objetos  en PHP</h1>

<section class="estiloSeccion">

<div class="contenedor20">

<nav class="estiloNav">
            <ul class="estiloUlTex">
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=0"> Inicio </a></li>
                <hr>
                <li class="liSeparador"> Arreglos </li>
                <hr>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=1"> Crear </a></li>
                <hr>
                <li class="liSeparador"> Objetos </li>
                <hr>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=2"> Crear  </a></li>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/listarControlador.php"> Listar </a></li>
            </ul>
        </nav>

</div>

<div class="contenedor70">

<?php 
        // defino varible opcion con el valor que viede por la URL  por el metodo GET 
       // isset(VARIABLE)
       if (!isset($vista)) 
            $vista="default.php";

        require $vista;

        ?>



    </div>
    

</section>

    </main>
    <footer class="estiloFooter">
         <!--footer o pie de la pagina -->
         <h3 class="estiloH3"> by: Mi nommbre completo</h3>

         <div class="estiloGitHub">
             <img class="imgIco" src="../assets/images/github.png" alt="">
             <small class="estiloTxtSmall"> miUsuarioGitHub</small>

         </div>

          <!--footer o pie de la pagina -->
    </footer>
</body>

</html>