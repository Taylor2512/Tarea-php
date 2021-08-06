<?php

if (!isset($_SESSION)) {
    session_start(); //inicia la sesion
}

//lectura de parametros enviados por el formulario de form.php
$total = 0;
$mensajeError = '';
$isFalta = false;

if (
    !isset($_POST['nombre'], $_POST['correo'], $_POST['genero']) ||
    empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['genero'])
) {
    $mensajeError = 'Faltan datos de ingresar <br/>';
    $isFalta = true;
    redireccionar($mensajeError);
}

isset($mensajeError, $total); //true
empty($mensajeError); // true






$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';

$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';

$genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';


if (!$isFalta) {
    echo "Nombre:" . $nombre . "<br/>Correo: " . $correo;
    echo "<br/>Genero:" . $genero;
}

echo "<br/><a href='#' onClick='history.go(-1);'>Atras</a>";
echo "<br /> <a href='registro.php'>Registra nuevo</a>";


//require_once "form.php";

class miembro
{
    public $nombre;
    public $correo;
    public $genero;
}


class Data
{
    //Intermediario entre la base de datos y vista


    function getForm()
    {

        $lista = array();
        $SESSION = new miembro();
        $SESSION->nombre = $_POST['nombre'];
        $SESSION->correo = $_POST['correo'];
        $SESSION->genero = $_POST['genero'];

        array_push($lista, $SESSION);

        return $lista;
    }
}



$d = new Data();
$lista = $d->getForm();
echo "<hr>";
foreach ($lista as $SESSION) {
    echo "<br/>";
    echo "Nombre: " . $SESSION->nombre;

    echo "<br/>";
    echo "Correo: " . $SESSION->correo;

    echo "<br/>";
    echo "Genero: " . $SESSION->genero;
}



function redireccionar($mensaje)
{
    //   echo $mensaje;
    $_SESSION['mensajeError'] = $mensaje; // guardar variable en sesion

    // redireccionar a la pagina del formulario
    header("Location:form.php");
}
