<?php

	$nombre=$_POST['formNombre'];
	$empresa=$_POST['formEmpresa'];
	$email=$_POST['formEmail'];
	$telefono=$_POST['formTelefono'];
	$formula=$_POST['formFormula'];
	$finan=$_POST['formFinan'];

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
								<p>Estamos felices de que te confies en nosotros, revisaremos tu propuesta y te contactaremos a la brevedad.</p>
								<p>Ante cualquier consulta puedes escribirnos nuevamente o buscarnos en redes sociales.</p>
								<p>Hasta Pronto</p>
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

?>