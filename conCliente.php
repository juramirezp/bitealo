<?php

	$nombre=$_POST['conNombre'];
	$email=$_POST['conEmail'];
	$telefono=$_POST['conTelefono'];
	$texto=$_POST['conMensaje'];

	$para = $email;
	$titulo = 'Comprobante de Contacto';
	$mensaje = '<html>
					<head>
					<title>Confirmación Contacto</title>
					<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

					<style>
						*{
							font-family: "Raleway", sans-serif;
						}
						html,body{
							margin:0;
							padding:0;
						}
						#cuerpo{
							width:70%;
							margin: 0 auto;
						}
						h1{
							text-align: center;
							width: 100%;
							color:grey;
							padding-bottom: .4em;
							padding-top: .4em;
						}
						#divLogo{
							width:100%;
							text-align: center;
						}
						#logo{
							width: 35%;
							margin: auto;
						}
						#spanFirma{
							font-size: 1.2em;
							color:grey;
							font-weight: bold;
						}
						#pie{
							margin-top: 3em;
							background-color: grey;
							color:white;
							text-align: center;
							padding-top: 2em;
							padding-bottom: 2em;
							width:100%;
						}
						#pie table a, #pie table span{
							text-decoration: none;
							color:white;
							padding: .4em;
						}
					</style>
					</head>
						<body>
							<div class="div" id="cuerpo">
							<div id="divLogo">
								<img src="http://bitealo.cl/img/Logo-bitealo.jpg" alt="" id="logo">
								</div>
								<h1>!Recibimos tu mensaje!</h1>
								<p>Hola '.$nombre.',</p>
								<p>Gracias por escribirnos, nos contactaremos contigo a la brevedad.</p>
								<p>Si tienes m&aacute;s consultas puedes escribirnos nuevamente o buscarnos en redes sociales.</p>
								<p>Hasta Pronto.</p>
								<p id="spanFirma">Equipo Bitealo</p>

							</div>
						</body>
					</html>
				';
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$cabeceras .= 'From: hola@bitealo.cl' . "\r\n" . //La direccion de correo desde donde supuestamente se envió
	    'Reply-To: hola@midominio.com' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
	    'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
	 
	mail($para, $titulo, $mensaje, $cabeceras);

	$para = 'hola@bitealo.cl';
	$titulo = 'Contacto Web';
	$mensaje =	'<html>
					<head>
					<title>Contacto Web</title>
					<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

					<style>
						*{
							font-family: "Raleway", sans-serif;
						}
						html,body{
							margin:0;
							padding:0;
						}
						#cuerpo{
							width:70%;
							margin: 0 auto;
						}
						h1{
							text-align: center;
							width: 100%;
							color:grey;
							padding-bottom: .4em;
							padding-top: .4em;
						}
						#divLogo{
							width:100%;
							text-align: center;
						}
						#logo{
							width: 35%;
							margin: auto;
						}
						#spanFirma{
							font-size: 1.2em;
							color:grey;
							font-weight: bold;
						}
						#pie{
							margin-top: 3em;
							background-color: grey;
							color:white;
							text-align: center;
							padding-top: 2em;
							padding-bottom: 2em;
							width:100%;
						}
						#pie table a, #pie table span{
							text-decoration: none;
							color:white;
							padding: .4em;
						}
						#mensaje{
							font-style: italic;
							text-align: justify;
							margin-left: 5%;
							margin-right: 5%;
							padding-top: 10px;
							padding-bottom: 10px;
						}
						#mensaje span, .justify span, table span{
							font-weight: bold;
						}
						.justify{
							text-align: justify;
						}
					</style>
					</head>
						<body>
							<div class="div" id="cuerpo">
							<div id="divLogo">
								<img src="http://bitealo.cl/img/Logo-bitealo.jpg" alt="" id="logo">
								</div>
								<h1>!Tienen un nuevo mensaje!</h1>
								<p class="justify">Hola, el cliente <span>'.$nombre.'</span> les realiza la siguiente consulta:</p>

								<p id="mensaje">"'.$texto.'"</br>								
								
								<p>Sus datos de contacto son:</p>
								<table>
									<tr>
										<td>Nombre: </td>
										<td><span>'.$nombre.'</span></td>
									</tr>
									<tr>
										<td>Email: </td>
										<td><span>'.$email.'</span></td>
									</tr>
									<tr>
										<td>Telefono: </td>
										<td><span>'.$telefono.'</span></td>
									</tr>
								</table>

								<p>Respondele a la brevedad.</p>
								<p>Buen Dia! :)</p>
								<p id="spanFirma">Contacto Bitealo.cl</p>

							</div>
						</body>
					</html>';



	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$cabeceras .= 'From: ContactoWeb@bitealo.cl' . "\r\n" . //La direccion de correo desde donde supuestamente se envió
	    'Reply-To: '.$email.'' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
	    'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP

	mail($para, $titulo, $mensaje, $cabeceras);


	
?>