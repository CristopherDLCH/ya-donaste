<?php
session_start();
error_reporting(0);
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");
$varSesion=$_SESSION['usuario'];
$id_solicitudes=$_GET['id'];

$consultaa="SELECT * FROM solicitudes WHERE id_solicitudes='$id_solicitudes'";
$resultado=mysqli_query($conexion, $consultaa);
$row=mysqli_fetch_assoc($resultado);

if ($varSesion==null || $varSesion='') {
  header('Location:index.html');
  die();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="../css/styleEditarMisSolicitudes.css">
    <link href="assets/img/faviconn.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Ya <span>Donaste</span></h3>
      </div>
      <div class="right_area">
        <a href="exitSession.php" class="logout_btn">Salir</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../img/fotoPerfil.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Quiero donar</span></a>
        <a href="solicitudes.php"><i class="fas fa-cogs"></i><span>Necesito donantes</span></a>
        <a href="solicitudesUser.php"><i class="fas fa-cogs"></i><span>Mis solicitudes</span></a>
        <a href="requisitos.php"><i class="fas fa-table"></i><span>Requisitos</span></a>
        <a href="mitos.php"><i class="fas fa-th"></i><span>Mitos</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Configuración</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../img/fotoPerfil.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['usuario']?></h4>
      </div>
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Quiero donar</span></a>
      <a href="solicitudes.php"><i class="fas fa-cogs"></i><span>Necesito donantes</span></a>
      <a href="solicitudesUser.php"><i class="fas fa-cogs"></i><span>Mis solicitudes</span></a>
      <a href="requisitos.php"><i class="fas fa-table"></i><span>Requisitos</span></a>
      <a href="mitos.php"><i class="fas fa-th"></i><span>Mitos</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Configuración</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
      </div>
      <div class="mitos">
        <div class="mitosPartes"> 
          <form class= "fo" action="solicitudesUserEditUpdate.php" method="POST">
            <input type="hidden" id="login" class="uno" name="idSolicitudes" value="<?php echo $row["id_solicitudes"]?>">
            <label class="lb1">Nombre del Paciente</label>
            <input type="text" id="login" class="uno" name="nombrePaciente" value="<?php echo $row["nombre_paciente"]?>">
            <br>
            <label class="lb3">Tipo de Sangre</label>
            <label class="lb3">Cantidad de Donantes</label>
            <label class="lb3">Ciudad</label>
            <br>
            <input type="text" id="login" class="dos" name="tipoSangre" value="<?php echo $row["tipo_sangre"]?>">
            <input type="number" id="login" class="dos" name="cantidadDonantes" value="<?php echo $row["cantidad_donantes"]?>">
            <input type="text" id="login" class="dos" name="ciudad" value="<?php echo $row["ciudad"]?>">
            <br>
            <label class="lb1">Hospital</label>
            <br>
            <input type="text" id="login" class="uno" name="hospitalDonacion" value="<?php echo $row["hospital_donacion"]?>">
            <br>
            <label class="lb1">Descripción</label>
            <br>
            <input type="text" id="login" class="uno" name="descripcion" value="<?php echo $row["descripcion"]?>">
            <br>
            <label class="lb4">Telefono</label>
            <label class="lb4">Detalles</label>
            <br>
            <input type="text" id="login" class="tres" name="telefono" value="<?php echo $row["telefono"]?>">
            <input type="text" id="login" class="tres" name="detalles" value="<?php echo $row["detalles"]?>">
            <br>
            <input type="submit" class="fadeIn fourth" value="Actualizar">
          </form>
        </div> 
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>