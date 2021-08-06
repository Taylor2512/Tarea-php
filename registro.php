<?php

if (!isset($_SESSION)) {
    session_start(); //inicia la sesion
}

//lectura de parametros enviados por el formulario de form.php
$total = 0;
$mensajeError = '';
$isFalta = false;

if (
    !isset($_GET['nombre'], $_GET['correo'],$_GET['genero']) ||
    empty($_GET['nombre']) || empty($_GET['correo']) || empty($_GET['genero'])
) {
    $mensajeError = 'Faltan datos de ingresar <br/>';
    $isFalta = true;
    redireccionar($mensajeError);
}

isset($mensajeError, $total); //true
empty($mensajeError); // true






$nombre = (isset($_GET['nombre'])) ? $_GET['nombre'] : '';

$correo = (isset($_GET['correo'])) ? $_GET['correo'] : '';

$genero = (isset($_GET['genero'])) ? $_GET['genero'] : '';


if (!$isFalta) {
    echo "Nombre:" . $nombre . "<br/>Correo: " . $correo;
    echo "<br/>Genero:" . $genero ;
    

}

echo "<br/><a href='#' onClick='history.go(-1);'>Atras</a>";
echo "<br /> <a href='registro.php'>Registra nuevo</a>";









function redireccionar($mensaje)
{
    //   echo $mensaje;
    $_SESSION['mensajeError'] = $mensaje; // guardar variable en sesion

    // redireccionar a la pagina del formulario
    header("Location:form.php");
}
