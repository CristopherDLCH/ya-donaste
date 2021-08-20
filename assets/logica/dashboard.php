<?php
session_start();
error_reporting(0);
$varSesion=$_SESSION['usuario'];

if ($varSesion==null || $varSesion='') {
  header('Location:index.html');
  die();
}

$conexion=mysqli_connect("localhost", "root", "", "yadonaste");
$consulta="SELECT * FROM solicitudes ORDER BY id_solicitudes DESC";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title> 
    <link rel="stylesheet" href="../css/Dashboards.css">
    <link href="../img/faviconn.png" rel="icon">
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
        <h1>No olvides que el poder de salvar vidas está en tus brazos</h1>
      </div>
      <div class="mitos">
        <?php $resultado=mysqli_query($conexion, $consulta);
        while ($row=mysqli_fetch_assoc($resultado)) {
        ?>
          <div class="mitosPartes"> 
              <img class="imagen" src="../img/fotoPerfil.png" alt="">
              <h3><?php echo $row["nombre_paciente"]; ?></h3>
              <p><?php echo $row["descripcion"]; ?></p>
              <p>Se requiere sangre tipo <strong><?php echo $row["tipo_sangre"]; ?></strong></p>
              <p>Necesita <strong><?php echo $row["cantidad_donantes"]; ?></strong> donantes</p>
              <p>Para la ciudad de <strong><?php echo $row["ciudad"]; ?></strong></p>
              <p>En el <strong><?php echo $row["hospital_donacion"]; ?></strong></p>
              <p><?php echo $row["detalles"]; ?></p>
              <br>
              <a class="contacto" type="button" target="_blank" class="fadeIn fourth" href="https://api.whatsapp.com/send?phone=51<?php echo $row["telefono"]; ?>&text=Hola%20que%20tal%2C%20me%20enter%C3%A9%20por%20YADONASTE%20que%20necesitas%20una%20donaci%C3%B3n%F0%9F%92%89%2C%20quisiera%20poder%20colaborar%20y%20ayudar%20%F0%9F%A9%B8" value="Go to Google">WhatsApp ☎</a>
          </div>

        <?php } mysqli_free_result($resultado);?>
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