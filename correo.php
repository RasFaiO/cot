<?php 
  if (isset($_POST['correo_envio'])) {
    if (!file_exists('mensaje')) {
      mkdir("mensaje",0777,true);
    } else {
      $nom = $_POST['nombre'];
      $cor = $_POST['email'];
      $tel = $_POST['telefono'];
      $mot = $_POST['motivo'];
      $men = $_POST['mensaje'];
      $archivo = fopen("mensaje/mensaje.txt","w+");
      fputs($archivo,"");
      fclose($archivo);
      $archivo = fopen("mensaje/mensaje.txt","r+");
      fputs($archivo,"Nombre: ".$nom);
      fputs($archivo,"\n \n");
      fputs($archivo,"Correo: ".$cor);
      fputs($archivo,"\n \n");
      fputs($archivo,"Teléfono: ".$tel);
      fputs($archivo,"\n \n");
      fputs($archivo,"Motivo: ".$mot);
      fputs($archivo,"\n \n");
      fputs($archivo,"Mensaje: ".$men);
      fclose($archivo);
    }
    include('PHPMailer-master/class.phpmailer.php');
    include('PHPMailer-master/class.smtp.php');
    $mail = new PHPMailer();
    $mail->From = "cotrasangilltda@yahoo.es";
    $mail->FromName = "Cotrasangil";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "cotrasangilltda@yahoo.es";
    $mail->Password = "ROSa1986";
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.bizmail.yahoo.com";
    $mail->Port = 465;
    $mail->Subject = "Solicitud - Queja - Reclamo";
    $mail->addAttachment("mensaje/mensaje.txt");
    $mail->addAddress("cotrasangilltda@yahoo.es");
    $mail->msgHTML("www.cotrasangil.com");
    $mail->IsHTML(true);
    if (!$mail->send()){
      echo "Error: ".$mail->ErrorInfo;
    }else{
      echo "<h3 class='paginacion red white-text'>Mensaje enviado con éxito</h3>
            <h5 class='paginacion red white-text'>Te contactaremos lo antes posible!</h5>";
    }
  }
  
?>