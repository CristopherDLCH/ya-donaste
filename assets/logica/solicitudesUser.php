<?php
session_start();
error_reporting(0);
$conexion=mysqli_connect("localhost", "root", "", "yadonaste");
$varSesion=$_SESSION['usuario'];

$consulta="SELECT id_usuarios FROM usuarios WHERE email='$varSesion'";
$resultado=mysqli_query($conexion, $consulta);
$row=mysqli_fetch_assoc($resultado);
$ultimate=$row["id_usuarios"];

$consulta2="SELECT * FROM solicitudes WHERE id_usuarios='$ultimate' ORDER BY id_solicitudes DESC";
$resultado2=mysqli_query($conexion, $consulta2);

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
    <link rel="stylesheet" href="../css/styleMisSolicitude.css">
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
        <h1>Estas son todas tus solicitudes de donación</h1>
      </div>
      <div class="mitos">
        <?php
        while ($row2=mysqli_fetch_assoc($resultado2)) {
        ?>
          <div class="mitosPartes"> 
              <img class="imagen" src="../img/fotoPerfil.png" alt="">
              <h3></h3>
              <h3><?php echo $row2["nombre_paciente"];?></h3>
              <p><?php echo $row2["descripcion"];?></p>
              <p>Se requiere sangre tipo <strong><?php echo $row2["tipo_sangre"];?></strong></p>
              <p>Necesita <strong><?php echo $row2["cantidad_donantes"];?></strong> donantes</p>
              <p>Para la ciudad de <strong><?php echo $row2["ciudad"];?></strong></p>
              <p>En el <strong><?php echo $row2["hospital_donacion"];?></strong></p>
              <p><?php echo $row2["detalles"];?></p>
              <br>
              <a class="contacto-green" type="button" class="fadeIn fourth" href="solicitudesUserEdit.php?id=<?php echo $row2["id_solicitudes"];?>">Editar</a>
              <a class="contacto-red" type="button" class="fadeIn fourth" href="solicitudesUserDelete.php?id=<?php echo $row2["id_solicitudes"];?>">Eliminar</a>
          </div>
        <?php } mysqli_free_result($resultado2);?>
    </div>
    
    <script src="assets/js/eliminarConfirmacion.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>