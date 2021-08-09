<?php

if (!isset($_SESSION)) {
    session_start(); //inicia la sesion
}
$lista = array();
//lectura de parametros enviados por el formulario de form.php
$total = 0;
$mensaje = '';
$isFalta = false;
$mensaje = '';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];





/*
if (!$isFalta) {
    echo "Nombre:" . $nombre . "<br/>Correo: " . $correo;
    echo "<br/>Genero:" . $genero;
}

echo "<br/><a href='#' onClick='history.go(-1);'>Atras</a>";
echo "<br /> <a href='registro.php'>Registra nuevo</a>";
*/

//require_once "form.php";


class miembro
{
    public $nombre;
    public $correo;
    public $genero;
   

}

if (!isset($nombre, $correo, $genero) || empty($nombre) || empty($correo) || empty($genero)) {
$mensaje = 'Faltan datos';
    if (!isset($mostrando)) {
        redireccionar($mensaje);
    }
} else {
    if (isset($_SESSION['lista'])) {
        $lista = $_SESSION['lista'];
    }
    $nuevomiembro = new miembro();
    $nuevomiembro->nombre = $nombre;
    $nuevomiembro->correo = $correo;
    $nuevomiembro->genero = $genero;

    array_push($lista, $nuevomiembro);
    $_SESSION['lista'] = $lista;
    redireccionar("Miembro ingresado con éxito");
}

function redireccionar($mensaje) {
    $_SESSION['mensaje'] = $mensaje; // guardar variable en sesion
    header("Location:form.php");
}

}
      /*

$d = new Data();
$lista = $d->getForm();
echo "<hr>";
foreach ($lista as $_SESSION) {
    echo "<br/>";
    echo "Nombre: " . $_SESSION->nombre;

    echo "<br/>";
    echo "Correo: " . $_SESSION->correo;

    echo "<br/>";
    echo "Genero: " . $_SESSION->genero;
}

*/

