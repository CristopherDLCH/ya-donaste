<?php
session_start();
error_reporting(0);
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");
$varSesion=$_SESSION['usuario'];

$consultaa="SELECT id_usuarios FROM usuarios WHERE email='$varSesion'";
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
    <link rel="stylesheet" href="../css/styleSolicitudess.css">
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
        <h1>Te ayudamos a llegar a más potenciales donantes de sangre</h1>
        <p>Crea una solicitud de donación de sangre con los datos requeridos para que en poco tiempo se contacten
        contigo.</p>
      </div>
      <div class="mitos">
        <div class="mitosPartes"> 
          <form action="solicitudesInsert.php" method="POST">
            <input type="hidden" class="uno" name="idUsuarios" value="<?php echo $row["id_usuarios"]?>">
            <input type="text" id="login" class="uno" name="nombrePaciente" placeholder="Nombre y Apellidos del donatario">
            <br>
            <input type="text" id="login" class="dos" name="tipoSangre" placeholder="Tipo de sangre">
            <input type="number" id="login" class="dos" name="cantidadDonantes" placeholder="Cantidad de donantes">
            <input type="text" id="login" class="dos" name="ciudad" placeholder="Ciudad">
            <br>
            <input type="text" id="login" class="uno" name="hospitalDonacion" placeholder="Hospital donde se realizará la donación">
            <br>
            <input type="text" id="login" class="uno" name="descripcion" placeholder="Descripción del paciente">
            <br>
            <input type="text" id="login" class="tres" name="telefono" placeholder="Telefono de contacto">
            <input type="text" id="login" class="tres" name="detalles" placeholder="Detalles al momento del encuentro">
            <br>
            <input type="submit" class="fadeIn fourth" value="Crear solicitud">
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