<?php
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");

$idUsuario=$_POST['idUsuarios'];
$nombre_paciente=$_POST['nombrePaciente'];
$tipo_sangre=$_POST['tipoSangre'];
$cantidad_donantes=$_POST['cantidadDonantes'];
$ciudad=$_POST['ciudad'];
$hospital_donacion=$_POST['hospitalDonacion'];
$descripcion=$_POST['descripcion'];
$telefono=$_POST['telefono'];
$detalles=$_POST['detalles'];

$insertar="INSERT INTO solicitudes(`id_usuarios`, `nombre_paciente`, `tipo_sangre`, `cantidad_donantes`, `ciudad`, `hospital_donacion`, `descripcion`, `telefono`, `detalles`) VALUES
('$idUsuario', '$nombre_paciente', '$tipo_sangre', '$cantidad_donantes', '$ciudad', '$hospital_donacion', '$descripcion', '$telefono', '$detalles');";

$verificarSolicitudDuplicada=mysqli_query($conexion, "SELECT * FROM solicitudes WHERE nombre_paciente='$nombre_paciente'");
if (mysqli_num_rows($verificarSolicitudDuplicada)>0) {
    echo'<script type="text/javascript">
    alert("Ya existe una solicitud con ese paciente");
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

mysqli_close($conexion);
?>