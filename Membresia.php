<?php

    session_start();

?>




<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Membresia</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Tarjeta/css/estilo_Me.css">
</head>
<body>
    <nav>
        <ul>
            <h1><a href="Pagina_web.php">Tin Tuukul</a></h1>
            <li><a href="">Chat bot</a></li>
            <li><a href="Redes_S.php">Redes Sociales</a></li>
            <li><a href="Minijuegos.php">Minijuegos</a></li>
            <li><a href="Test.php">Test</a></li>
            <li><a href="Videos_AA.php">Videos de autoayuda</a></li>
            <li><a href="Info_Tin_Tuukul.php">Info. de Tin Tukuul</a></li>
            <li><a href="">Membresia</a></li>
            <li><a href="php/cerrar_sesion.php">Cerrar sesion</a></li>
        </ul>
    </nav>

	<!--Codigo para el panel de membresias-->
	<main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Actualiza al plan Gratuito</h3>
                    <p>Haz click en el boton para conocer el plan Gratuito</p>
                    <button id="btn__iniciar-sesion">Gratuito</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Actualiza al plan Premiun</h3>
                    <p>Haz click en el boton para conocer el plan Premiun</p>
                    <button id="btn__registrarse">Premiun</button>
                </div>
            </div>
            <!--Formulario de membresia gratuita y premiun-->
            <div class="contenedor__login-register">
                <!--gratuita-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Gratuita</h2>
                    <br></br>
                    <h3>Test</h3>
					<h3>Informacion</h3>
					<h3>Algunos minijuegos</h3>
                    <button>Entrar</button>
                </form>
                <!--Premiun-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Premiun</h2>
					<br></br>
                    <h3>Test</h3>
					<h3>Informacion</h3>
					<h3>Todos los minijuegos</h3>
					<h3>Chat bot</h3>
					<h3>Actualizaciones rapidas</h3>
                    <button id="hide-button" onclick="Showhide()">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
	<script src="assets/js/script.js"></script>

    <script>
        window.onload = function Iniciar_sesion(){
            formulario_register.style.display = "none";
            contenedor_login_register.style.left = "10px";
            formulario_login.style.display = "block";
            caja__trasera_register.style.opacity = "1";
            caja__trasera_login.style.opacity = "0";
        }
    </script>



	<div id="hide-image" class="ocultar">

		<!-- Tarjeta -->
		<section class="tarjeta" id="tarjeta">
			<div class="delantera">
				<div class="logo-marca" id="logo-marca">
					<!-- <img src="img/logos/visa.png" alt=""> -->
				</div>
				<img src="/Tarjeta/img/chip-tarjeta.png" class="chip" alt="">
				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre">Jhon Doe</p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p></p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CCV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
				<a href="#" class="link-banco">www.tubanco.com</a>
			</div>
		</section>



		<!-- Contenedor Boton Abrir Formulario -->
		<div class="contenedor-btn">
			<button class="btn-abrir-formulario" id="btn-abrir-formulario">
				<i class="fas fa-plus"></i>
			</button>
		</div>

		<!-- Formulario -->
		<form action="" id="formulario-tarjeta" class="formulario-tarjeta">
			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="19" autocomplete="off">
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3">
				</div>
			</div>
			<button type="submit" class="btn-enviar">Enviar</button>
		</form>
	</div>

	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="Tarjeta/js/main_T.js"></script>
</body>
</html>