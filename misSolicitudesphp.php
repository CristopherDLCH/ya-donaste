<?php
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");

/*$verificarUsuarioDuplicado=mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");
if (mysqli_num_rows($verificarUsuarioDuplicado)>0) {
    echo'<script type="text/javascript">
    alert("Ya existe un usuario con ese correo");
    window.history.go(-1);
    </script>';
    exit;
}

$resultado=mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo'<script type="text/javascript">
    alert("Error al crear la solicitud de donación, intentalo nuevamente");
    window.location.href="solicitudes.php";
    </script>';
} else {
    echo'<script type="text/javascript">
    alert("Solicitud creada con exito");
    window.location.href="solicitudes.php";
    </script>';
}

mysqli_close($conexion);*/
?>