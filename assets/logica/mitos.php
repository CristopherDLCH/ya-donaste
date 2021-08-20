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
    <link rel="stylesheet" href="assets/css/styleMitos.css">
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
        <h1>Eliminando Mitos</h1>
        <p>A continuación te presentamos los mitos más comunes acerca de la donación de sangre</p>
      </div>
      <div class="mitos">
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito1.png" alt="">
            <h3>¿Donar sangre engorda?</h3>
            <p>Ni engorda ni adelgaza. pero lo cierto es que después de la donación, suele abrirse el apetito
                por la necesidad de recuperar energía.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito2.png" alt="">
            <h3>¿Me hice un piercing, puedo donar?</h3>
            <p>Puedes donar después de 12 meses de que te realizaste el último y si está en mucosa retíralo 72 hrs
                antes de donar.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito3.png" alt="">
            <h3>¿Me hice un tatuaje, puedo donar?</h3>
            <p>Puedes donar después de 12 meses de que te realizaste el último tatuaje.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito4.png" alt="">
            <h3>¿Estoy menstruando, puedo donar sangre?</h3>
            <p>Estar en tu periodo no es impedimento para donar sangre, si te sientes bien puedes hacerlo.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito5.png" alt="">
            <h3>¿Me van a sacar mucha sangre?</h3>
            <p>Solamente te extraerán 450 ml o el equivalente a un frasco de mayonesa.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito6.png" alt="">
            <h3>¿Puedo donar sangre si tuve tuberculosis?</h3>
            <p>Tres años después de haber terminado el tratamiento, sí es posible donar.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito7.png" alt="">
            <h3>¿Es posible donar sangre si tuve hepatitis?</h3>
            <p>Sí, siempre y cuando haya sido Hepatitis A antes de los 10 años.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito8.png" alt="">
            <h3>¿Los diabéticos pueden donar sangre?</h3>
            <p>Pueden donar siempre y cuando no sean dependientes de insulina.</p>
        </div>
        <div class="mitosPartes">
            <img class="imagen" src="assets/img/mito9.png" alt="">
            <h3>¿La aguja va a durar mucho tiempo dentro de mi brazo?</h3>
            <p>El tiempo promedio de la donación de sangre va de 4 a 12 minutos.</p>
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