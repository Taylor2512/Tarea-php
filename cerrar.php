<?php
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();
echo 'Se ha cerrado la sesión!';
?>
<br><br>
<input type="button" onclick="location.href = 'form.php'" value="Volver al formulario" >