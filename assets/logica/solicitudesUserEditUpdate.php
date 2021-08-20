<?php
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");

$id_Solicitud=$_POST['idSolicitudes'];
$nombre_paciente=$_POST['nombrePaciente'];
$tipo_sangre=$_POST['tipoSangre'];
$cantidad_donantes=$_POST['cantidadDonantes'];
$ciudad=$_POST['ciudad'];
$hospital_donacion=$_POST['hospitalDonacion'];
$descripcion=$_POST['descripcion'];
$telefono=$_POST['telefono'];
$detalles=$_POST['detalles'];

$actualizar="UPDATE solicitudes SET `nombre_paciente`='$nombre_paciente', `tipo_sangre`='$tipo_sangre', 
`cantidad_donantes`='$cantidad_donantes', `ciudad`='$ciudad', `hospital_donacion`='$hospital_donacion', 
`descripcion`='$descripcion', `telefono`='$telefono', `detalles`='$detalles' WHERE `id_solicitudes`='$id_Solicitud'";

/*$verificarUsuarioDuplicado=mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");
if (mysqli_num_rows($verificarUsuarioDuplicado)>0) {
    echo'<script type="text/javascript">
    alert("Ya existe un usuario con ese correo");
    window.history.go(-1);
    </script>';
    exit;
}*/

$resultado=mysqli_query($conexion, $actualizar);
if (!$resultado) {
    echo'<script type="text/javascript">
    alert("Error al actualizar la solicitud, intentalo nuevamente");
    window.location.href="solicitudesUserEdit.php";
    </script>';
} else {
    echo'<script type="text/javascript">
    alert("Solicitud actualizada con exito");
    window.location.href="solicitudesUser.php";
    </script>';
}

mysqli_close($conexion);
?>