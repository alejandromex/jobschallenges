<?php
	require ('includes/header.php');

	if(!isset($_SESSION['login']))
	{
		echo "<script>window.location.href='".$url."index.php';</script>";
	}

      use PHPMailer\PHPMailer\PHPMailer;  
      use PHPMailer\PHPMailer\Exception;
	  use PHPMailer\PHPMailer\SMTP;
	  
	  var_dump($_POST);
	  $para = $_POST['para'];
	  $de = $_POST['de'];
	  $asunto = $_POST['asunto'];
	  $cuerpo = $_POST['cuerpo'];

$mail = new PHPMailer(true);
						try {
							//Server settings
							//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                           // Enable verbose debug output
							$mail->isSMTP();                                            // Send using SMTP
							$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
							$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
							$mail->Username   = 'alexandro.vel97@gmail.com';                     // SMTP username
							$mail->Password   = 'pedro123';                               // SMTP password
							$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
							$mail->Port       = 587;                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
							$mail->SMTPOptions = array(
								'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false,
								'allow_self_signed' => true
								)
								);
							//Recipients
							$mail->setFrom('alexandro.vel97@gmail.com', 'TalentFinder');
							$mail->addAddress($para);     // Add a recipient

							// Content
							$mail->isHTML(true);                                  // Set email format to HTML
							$mail->Subject = $asunto;
							$mail->Body    = '<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
							
							<center>
								
								<!-- <img style="padding:20px; class="imagen-mensaje" src="https://scontent-sjc3-1.xx.fbcdn.net/v/t1.0-9/125181366_3640081492723407_3502970411218697236_n.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_eui2=AeFjWIH4OMJrdbHsEvTkuxkexoiAFo1jd0XGiIAWjWN3Rf0RFf4BJQmbgG3eU57DP-ArxA0jOslasWk2y-uJa_XS&_nc_ohc=CxCkLxGbwCsAX8an1eM&_nc_ht=scontent-sjc3-1.xx&oh=5f91ecb98af92305e3a6d2ce12fdf0e9&oe=5FD141E4"> -->

							</center>

							<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
							
								<center>
								
								<h3 style="font-weight:100; color:#999">Ha recibido un nuevo correo de TalentFinder</h3>

								<hr style="border:1px solid #ccc; width:80%">

								<h4 style="font-weight:100; class="texto-cuerpo" color:#999; padding:0 20px">"'.$cuerpo." de parte de ".$de.'"</h4>

								<div style="line-height:60px; class="footer-mensaje" background:#0aa; width:60%; color:white">Talent Finder Guadalajara Jalisco - Solucion para futuros emprendimientos</div>

								</a>

								<br>

								<hr style="border:1px solid #ccc; width:80%">

								<h5 style="font-weight:100; color:#999">Si no se inscribio en esta cuenta, puede ignorar este correo electronico y la cuenta se eliminará.</h5>

								</center>

							</div>

						</div>';

							$envio = $mail->send();
						} catch (Exception $e) {
							echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
							
						}

?>
