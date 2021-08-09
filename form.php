<?php
  if (!isset($_SESSION)) {
    session_start();//iniciar la sesion
  }
  if (isset($_SESSION['mensaje'])) {
    echo "<script> alert(\"";
    echo $_SESSION['mensaje'];
    echo "\");</script>";
    unset($_SESSION['mensaje']);
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Directorio empresarial</title>
    <style>
        .formularios {
            border: 3px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background: #eee;
            width: 40%;
            margin: 0 auto;
            /*para centrar*/
        }

        .formItem {
            padding: 10px;
        }

        .error {
            color: red;
            font-size: 10px;
        }
    </style>
</head>

<body>
   
    <div id="contenedorPrincipal">

        <div id="contenedorContenido">

            <div class="formularios">

                <form method="POST" action="Registro.php">
                    <h4 style="text-align:center">Directorio empresarial</h4>
                    <div class="formItem">
                        <label>Nombre :</label>
                        <input type="text" name="nombre" id="nombre" />
                    </div>
                    <div class="formItem">
                        <label>Correo :</label>
                        <input type="text" name="correo" id="correo" />
                    </div>

                        <div class="formItem">
                            <label>Género:</label>
                            <input type="radio" name="genero" value="Masculino"/>Masculino
                            <input type="radio" name="genero" value="Femenino"/>Femenino
                        </div>

                    <div class="formItem">
                       <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                            <input type="button" onclick="location.href='mostrar.php'" value="Mostrar Datos">
                            <input type="reset" name="cancelar" id="cancelar" value="Cancelar"/>
                    </div>

                </form>

            </div>
        </div>

    </div>


</body>

</html>