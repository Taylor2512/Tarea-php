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

                <form method="POST" action="registro.php">
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
                        <label>Genero</label>
                        <select name="genero" id="genero">
                            <option value="0">Genero...</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>

                        </select>
                    </div>

                    <div class="formItem">
                        <input type="submit" name="enviar" id="Enviar" value="Enviar" />
                        <input type="reset" name="cancelar" id="Cancelar" value="Cancelar" />
                    </div>

                </form>

            </div>
        </div>

    </div>


    <?php

   
    if (!isset($_SESSION)) {
        session_start(); //iniciar la sesion
    }
    if (isset($_SESSION['mensajeError'])) {
        echo "<h4 class='error'>";
        echo $_SESSION['mensajeError'];
        echo "</h4>";
        //eliminar variable
        unset($_SESSION['mensajeError']);
    }
    ?>
</body>

</html>