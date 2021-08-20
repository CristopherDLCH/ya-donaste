<?php
session_start();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$conexion=mysqli_connect("localhost", "root", "", "yadonaste");
$consulta="SELECT * FROM usuarios WHERE email='$usuario' AND contrasena='$contrasena'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

$_SESSION['usuario']=$usuario;

if ($filas>0) {
    echo'<script type="text/javascript">
    alert("Bienvenido");
    window.location.href="dashboard.php";
    </script>';
} else {
    echo'<script type="text/javascript">
    alert("Usuario o Contrseña incorrectas");
    window.location.href="../../login.html";
    </script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>