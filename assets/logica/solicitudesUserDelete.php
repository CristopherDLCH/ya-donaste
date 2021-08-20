<?php
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");

$id_Solicitud=$_GET['id'];

$eliminar="DELETE FROM solicitudes WHERE `id_solicitudes`='$id_Solicitud'";
$resultado=mysqli_query($conexion, $eliminar);

/*$verificarUsuarioDuplicado=mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");
if (mysqli_num_rows($verificarUsuarioDuplicado)>0) {
    echo'<script type="text/javascript">
    alert("Ya existe un usuario con ese correo");
    window.history.go(-1);
    </script>';
    exit;
}*/

if (!$resultado) {
    echo'<script type="text/javascript">
    alert("Error al eliminar la solicitud, intentalo nuevamente");
    window.location.href="solicitudesUser.php";
    </script>';
} else {
    echo'<script type="text/javascript">
    alert("Solicitud eliminada con exito");
    window.location.href="solicitudesUser.php";
    </script>';
}

mysqli_close($conexion);
?>