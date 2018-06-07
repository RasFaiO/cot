<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Contactenos</title>
      <link rel="icon" href="../assets/img/favicon.ico">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
      <!-- build:css styles/main.css build/styles-->
      <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
      <link rel="stylesheet" href="../styles/styles.css">
      <!--endbuild-->
  </head>
  <body>
    <!--navbar inicio-->
    <div class="navbar-fixed">
      <ul id="dropdown2" class="dropdown-content red">
        <li><a href="" class="white-text as">Empresa</a></li>
        <li><a href="https://erpcotrasangil.sitrans.com.co/" target="_blank" class="white-text as">Silog</a></li>
        <li><a href="corporativo.html" class="white-text as">Correo corporativo</a></li>
        <li><a href="Archivos.html" class="white-text as">Archivos</a></li>
      </ul>
      <nav class="red fixed">
        <div class="nav-wrapper">
          <a href="../index.html" class="brand-logo icono_p">
            <img src="../assets/img/logo.jpg" alt="Cotrasangil">
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../index.html">Principal</a></li>
            <li><a href="https://cotrasangil.teletiquete.com/" target="_blank">Tiquetes Online</a></li>
            <li><a href="rutas.html">Rutas y horarios</a></li>
            <li><a href="oficinas.html">Oficinas</a></li>
            <li><a class="dropdown-trigger" href="#!" data-activates="dropdown2">Corporativo<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#">Contactenos</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!--navbar fin-->
    <ul id="slide-out" class="side-nav barra_lado">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="../assets/img/barr.jpg" class="white">
          </div>
          <a href="#!"><img class="circle" src="../assets/img/logo_cot.jpg"></a>
          <a href="#!"><span class="white-text email">.</span></a>
          <a href="#!"><span class="white-text email">.</span></a>
        </div>
      </li>
      <li><a href="../index.html" class="waves-effect"><i class="fas fa-home fa-2x"></i>Principal</a></li>
      <li><div class="divider"></div></li>
      <li><a href="https://cotrasangil.teletiquete.com/" target="_blank" class="waves-effect"><i class="fas fa-ticket-alt fa-2x"></i>Tiquetes Online</a></li>
      <li><div class="divider"></div></li>
      <li><a href="rutas.html" class="waves-effect"><i class="fas fa-clock fa-2x"></i>Rutas y horarios</a></li>
      <li><div class="divider"></div></li>
      <li><a href="oficinas.html" class="waves-effect"><i class="fas fa-building fa-2x"></i>Oficinas</a></li>
      <li><div class="divider"></div></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect"><i class="fas fa-chevron-down fa-2x"></i>Corporativo</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!" class="yellow darken-3 waves-effect"><i class="fas fa-briefcase fa-2x"></i>Empresa</a></li>
                <li><a href="https://erpcotrasangil.sitrans.com.co/" target="_blank" class="yellow darken-3 waves-effect"><i class="fas fa-list-alt fa-2x"></i>Silog</a></li>
                <li><a href="#!" class="yellow darken-3 waves-effect"><i class="fas fa-envelope fa-2x"></i>Correo Corporativo</a></li>
                <li><a href="#!" class="yellow darken-3 waves-effect"><i class="fas fa-file-pdf fa-2x"></i>Archivos</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><div class="divider"></div></li>
      <li><a href="contacto.php" class="waves-effect"><i class="fas fa-phone fa-2x"></i>Contactenos</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="esconder button-collapse"><i class="material-icons">menu</i></a>
    <!--fin barra móvil-->
    <div class="m12 s6 l4">
      <div class="yellow darken-3">
        <div class="slider yellow darken-3" >
          <ul class="slides">
            <li>
              <img class="responsive-img" src="../assets/img/bannermunicpio.jpg"> <!-- random image -->
            </li>
            <li>
              <img class="responsive-img" src="../assets/img/curiti.jpg"> <!-- random image -->
            </li>
            <li>
              <img class="responsive-img" src="../assets/img/7036.jpg"> <!-- random image -->
            </li>
            <li>
              <img src="../assets/img/Banner_cotrasangil.jpg"> <!-- random image -->
            </li>
            <li>
              <img src="../assets/img/cdabanner.jpg"> <!-- random image -->
            </li>
          </ul>
        </div>
      </div>  
    </div>
    <div class="red lighten">
      <div class="row tit divi">
        <h3>
          Conocer tu opinion es lo más importante, diligencia el siguiente formulario y te contactaremos lo antes posible.<br>
        </h3>
        <h5>Es necesario que llenes todos los campos *</h5>
      </div>
      <div class="row container tit">
        <form class="col s12" action="" method="POST">
          <div class="input-field col s12 row">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" name="nombre" type="text" class="validate" required maxlength="40" minlength="7">
            <label for="icon_prefix">Nombre *</label>
          </div>
          <div class="input-field col s12 row"> 
            <i class="material-icons prefix">email_open</i>
            <input id="icon_correo" name="email" type="email" class="validate" required maxlength="70">
            <label for="icon_correo">E-mail *</label>
          </div>
          <div class="input-field col s12 row">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" name="telefono" type="number" class="validate" min="3000000000" max="3600000000" required>
            <label for="icon_telephone">Teléfono *</label>
          </div>
          <div class="input-field col s12 row">
            <i class="material-icons prefix">view_headline</i>
            <select class="icons" name="motivo" id="icon_multiple">
              <option value="" disabled selected required>Motivo *</option>
              <option value="sugerencia" class="left circle">Sugerencia</option>
              <option value="queja" class="left circle">Queja</option>
              <option value="reclamo" class="left circle">Reclamo</option>
            </select>
          </div>
          <div class="input-field col s12 row">
            <i class="material-icons prefix">forum</i>
            <textarea id="textarea1" name="mensaje" class="materialize-textarea" required></textarea>
            <label for="textarea1">Mensaje *</label>
          </div>
          <div class="row divi">
            <input id="env_cor" name="correo_envio" type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </div>
    <?php
      include '../correo.php';
    ?>
    <!--footer inicio-->
    <footer class="page-footer yellow darken-3">
      <div class="">
        <div class="row">
          <div class="col l5 s12 black-text">
            <h5>Enlaces de interés</h5>
            <ul>
              <a href="http://www.sic.gov.co/" target="_blank"><img src="../assets/img/sic.jpg" alt=""></a>
              <a href="http://www.supertransporte.gov.co/" target="_blank"><img src="../assets/img/logo-vigilado.jpg" alt=""></a>
              <a href="http://www.mintic.gov.co/" target="_blank"><img src="../assets/img/mintic.png" alt=""></a>
            </ul>
          </div>
          <div class="col l3 s12 black-text">
            <h5>Redes Sociales</h5>
            <ul>
              <a class="blue-text text-darken-3" href="https://www.facebook.com/cotrasangilltda/"  target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>              
              <a class="blue-text text-lighten-1" href="https://twitter.com/hashtag/cotrasangil?vertical=default&src=hash"  target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
            </ul>
          </div>
          <div class="col l3 s12 black-text">
            <h5>Oficina Principal</h5>
            <ul>
              <li class="red-text"><i class="fas fa-map-marker"></i><span class="black-text"> <b>Dirección:</b> Cra 11 N° 5 -74 San Gil</span></li>
              <li class="red-text"><i class="fas fa-fax"></i><span class="black-text"> <b>Telefax:</b>   (097) 7242942</span></li>
              <li class="red-text"><i class="fas fa-phone"></i><span class="black-text"> <b>Secretaría:</b> 7243562 - 7243432</span></li>
              <li class="red-text"><i class="far fa-envelope"></i><span class="black-text"> <b>E-mail:</b> Secretariageneral@cotrasangil.com</span></li>
              <li class="red-text"><i class="far fa-clock"></i><span class="black-text"> <b>Lunes a Viernes</b></span></li>
              <li class="red-text"><span class="black-text">&nbsp; &nbsp; &nbsp;8:00am - 12:00pm y 2:00pm - 6:00pm</span></li>
              <li class="red-text"><span class="black-text">&nbsp; &nbsp; &nbsp;<b>Sábados</b></span></li>
              <li class="red-text"><span class="black-text">&nbsp; &nbsp; &nbsp;8:00am - 12:00pm</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container black-text">
          Cotrasangil ©
          <script>
            var f = new Date();
            document.write(f.getFullYear());
          </script>
        </div>      
      </div>
    </footer>
    <!--footer-->
    <!-- build:js js/index.js build/js-->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- endbuild -->
  </body>
</html>