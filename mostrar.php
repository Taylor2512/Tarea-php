<?php
$mostrando = true;
require_once 'Registro.php';
?>
<style>
    td{
        padding-left: 20px;
        padding-right: 20px;
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <td>Numero</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Genero</td>
    </tr>
    <?php
  
    foreach ($_SESSION['lista'] as $nuevomiembro) {
        ?>
        <tr>
            <?php
            echo "<td>" . $cont. "</td>";
            echo "<td>" . $nuevomiembro->nombre . "</td>";
            echo "<td>" . $nuevomiembro->correo . "</td>";
            echo "<td>" . $nuevomiembro->genero. "</td>";
            $cont += 1;
            ?>
        </tr>
        <?php
    }
    ?>

</table>
<a href='cerrar.php'>Cerrar sesión</a>
<a href='form.php'>Volver a formulario</a>