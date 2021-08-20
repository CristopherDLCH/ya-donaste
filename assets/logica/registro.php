<?php
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tipoSangre=$_POST['tipoSangre'];
$ciudad=$_POST['ciudad'];
$contrasena=$_POST['contrasena'];

$insertar="INSERT INTO usuarios(`nombres`, `apellidos`, `email`, `telefono`, `tipo_sangre`, `ciudad`, `contrasena`) VALUES
('$nombres', '$apellidos', '$correo', $telefono, '$tipoSangre', '$ciudad', '$contrasena');";

$verificarUsuarioDuplicado=mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");
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
    alert("Error al registrarse intentalo nuevamente");
    window.location.href="../../registro.html";
    </script>';
} else {
    echo'<script type="text/javascript">
    alert("Cuenta creada con exito");
    window.location.href="../../registro.html";
    </script>';
}

mysqli_close($conexion);
?>