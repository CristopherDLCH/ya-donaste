<?php
session_start();
error_reporting(0);
$varSesion=$_SESSION['usuario'];

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
    <link rel="stylesheet" href="assets/css/styleRequisito.css">
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
        <img src="assets/img/fotoPerfil.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Quiero donar</span></a>
        <a href="solicitudes.php"><i class="fas fa-cogs"></i><span>Necesito donantes</span></a>
        <a href="misSolicitudes.php"><i class="fas fa-cogs"></i><span>Mis solicitudes</span></a>
        <a href="requisitos.php"><i class="fas fa-table"></i><span>Requisitos</span></a>
        <a href="mitos.php"><i class="fas fa-th"></i><span>Mitos</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Configuración</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="assets/img/fotoPerfil.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['usuario']?></h4>
      </div>
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Quiero donar</span></a>
      <a href="solicitudes.php"><i class="fas fa-cogs"></i><span>Necesito donantes</span></a>
      <a href="misSolicitudes.php"><i class="fas fa-cogs"></i><span>Mis solicitudes</span></a>
      <a href="requisitos.php"><i class="fas fa-table"></i><span>Requisitos</span></a>
      <a href="mitos.php"><i class="fas fa-th"></i><span>Mitos</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Configuración</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <h1>Requisitos para la donación de sangre</h1>
        <p>Esta información solo son requisitos básicos para poder donar. La egibilidad final del donante
        sera determinada por el médico.</p>
      </div>
      <div class="mitos">
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos1.png" alt="">
            <p>No tener más de una pareja sexual o pareja de riesgo en los últimos 12 meses.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos2.png" alt="">
            <p>No haber sido detectado con VIH, enfermedad de chagas o hepatitis por virus B o C.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos3.png" alt="">
            <p>En el caso de una cirugía menor y/o extracción dental no complicada, esperar 7 días.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos4.png" alt="">
            <p>No haber tenido un infarto cardíaco o arritmia.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos5.png" alt="">
            <p>No encontrarse embarazada o en la etapa de lactación.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos6.png" alt="">
            <p>En el caso de cirugía mayor si hubo transfusión de sangre, es necesario esperar un año.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos7.png" alt="">
            <p>Pueden donar quienes padecieron Hepatitis antes de los 10 años de edad.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos8.png" alt="">
            <p>No haber consumido alcohol en las últimas 48 horas.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos9.png" alt="">
            <p>No haberse hecho tatuajes, perforaciones y/o acupuntura en los últimos 12 meses.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos10.png" alt="">
            <p>No haber consumido analgésicos como aspirina u otros antiinflamatorios en los últimos 5 días.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos11.png" alt="">
            <p>No presentar síntomas tales como tos, escurrimiento nasal, dolor de garganta, diarrea, entre otros.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos12.png" alt="">
            <p>Tener al menos entre 18 años y no más de 65 años.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos13.png" alt="">
            <p>Pesar mínimo de 50 kgs en adelante para donar.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/requisitos14.png" alt="">
            <p>No dejes pasar más de 4 horas sin comer. Evita consumir grasas, lácteos y huevo.</p>
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