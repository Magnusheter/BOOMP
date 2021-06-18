<?php
	session_start();
	if(!isset($_SESSION['usuario']))
	{
		?>
		<style type="text/css">
			
			.val_votacion {display: none;}
			
		</style>
		
		<?php
		session_destroy();
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Filtrando elementos por categorias</title>

	<link rel="stylesheet" href="css/estilos.css">

	<!-- PARA EL CALIFICACION -->

	<link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/estiloEstre.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet"> 

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>

	<!-- Incluir jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Definir la función de puntuación -->
<script type="text/javascript">
function ratestar($id, $puntuacion){
	$.ajax({
		type: 'GET',
		url: 'votaciones.php',
		data: 'votarElemento='+$id+'&puntuacion='+$puntuacion,
		success: function(data) {
			alert(data);
			location.reload();
		}
	});
}
</script>
</head>
<style type="text/css">
	.estrellas {text-shadow: 0 0 1px #F48F0A; cursor: pointer;  font-size: 60px;}
	.estrella_dorada { color: gold; font-size: 60px;}
	.estrella_normal { color: black; font-size: 60px;}
</style>

<body>
<?php
// Incluir la clase Votacion desde el fichero votaciones.php
include 'php/votaciones.php';

// Activar un objeto de trabajo
$V = new Votacion();
?>
	<div class="wrap">

		<div class="ctnt" id="modal-1">
			<div class="popup">
				<div class="img-2"></div>
				<div class="text">
					<h1 class="title">Arduino y Algunas Aplicaciones</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(1);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Coursera/UNAM</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						En este curso utilizaremos Arduino UNO para realizar dos prototipos que muestran el funcionamiento de dispositivos,
						como un chaleco para ciclista y un pastillero. No es requisito tener conocimientos de programación; sin embargo,
						conforme avances en el estudio de este curso probablemente necesites reforzar e investigar sobre algunos de los
						aspectos que aquí se expliquen. A través de las actividades y material didáctico de este curso aprenderás a aplicar
						la tarjeta Arduino y podrás adquirir y reforzar nociones básicas de programación, utilizando una herramienta de fácil
						acceso, que te permitirá además elaborar posteriores proyectos de tu interés.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li>Semana 1</li>
									<ul>
										<li>¿Cómo trabajaremos en este curso?</li>
										<li>Arduino, ¿Qué es y para qué sirve?</li>
									</ul>
								<li>Semana 2</li>
									<ul>
										<li>Prototipo de chaleco para ciclistas</li>
									</ul>
								<li>Semana 3</li>
									<ul>
										<li>Fabricación de un pastillero inteligente</li>
									</ul>
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>Gratis</p>
					<br>
					<h2>Duración</h2>
					<p>17 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>

					<br>	
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="1" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.1" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.1">★</label><!--
									  --><input  id="radio2.1" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.1">★</label><!--
									  --><input  id="radio3.1" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.1">★</label><!--
									  --><input  id="radio4.1" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.1">★</label><!--
									  --><input  id="radio5.1" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.1">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.coursera.org/learn/arduino-aplicaciones" target="_blank">INSCRIBIRME</a>
					</button>	
					<br>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>
		<?php
		$V2 = new Votacion();
		?>
		<div class="ctnt" id="modal-2">
			<div class="popup">
				<div class="img-2"></div>
				<div class="text">
					<h1>Master & Maker. Realiza proyectos con Arduino. De 0 a Maker!</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V2->mostrar_estrellitas_para(2);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Udemy</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						¿Quieres aprender a ser un maker? ¿Quieres saber todo lo que puedes llegar a hacer con Arduino? 
						Participa en este curso y aprende a realizar cualquier proyecto que se te pase por la cabeza con 
						Arduino. Con este curso aprenderás sobre las placas de Arduino, los componentes, los sensores, el 
						mundo analógico y el paso al mundo digital y todo desde un punto de vista práctico orientado a proyectos.
						Con cada sección irás aprendiendo de forma incremental y realizando proyectos con diferentes objetivos. 
						Cuando llegues a la última sección podrás realizar proyectos grandes con objetivos claros.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li>Sección 1. Conociendo el interesante mundo digital de Arduino.</li>
								<li>Sección 2. Descubriendo el mundo analógico de Arduino.</li>
								<li>Sección 3. Extendiendo Arduino y sus posibilidades al infinito.</li>
								<li>Sección 4. Creando tus propios proyectos.</li>
								<li>Sección 5. Cuando Python conoce Arduino.</li>
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>$1,500 MXN</p>
					<br>
					<h2>Duración</h2>
					<p>10 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="2" name="id" class="info1">
							<input type="text" value="Master & Maker. Realiza proyectos con Arduino. De 0 a Maker!" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  	 <input  id="radio1.2" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.2">★</label><!--
									  --><input  id="radio2.2" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.2">★</label><!--
									  --><input  id="radio3.2" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.2">★</label><!--
									  --><input  id="radio4.2" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.2">★</label><!--
									  --><input  id="radio5.2" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.2">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.udemy.com/course/master-maker-realiza-proyectos-con-arduino-de-0-a-maker/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-3">
			<div class="popup">
				<div class="img-2"></div>
				<div class="text">
					<h1>My Robotic Friends</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(3);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">HACK A BOSS kids</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						HACK A BOSS Kids es el primer paso para vivir y descubrir la era digital desde
						dentro en A Coruña. Es un bootcamp tecnológico para niños y niñas de entre 6 y 13 años. 
						Un programa único donde podrán aprender sobre programación, electrónica y robótica.

						El objetivo es que entren en contacto con la tecnología, la ciencia, el arte y las 
						matemáticas de una forma atractiva y amena.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista justificar">
								<li><b>Byte Squad (6-8 años):</b> En este primer nivel el objetivo es que los pequeños warriors 
									adquieran los conocimientos básicos de programación, robótica y electrónica. Además, 
									trabajarán el pensamiento computacional, lógica y resolución de problemas de manera eficiente.
								</li>
								<li><b>Giga Squad (8-11 años):</b> En este nivel la temática central de la formación gira entorno a la 
									programación, la electrónica, kits de robótica y, diseño e impresión 3D.
									Se iniciarán en los lenguajes de programación Python, así como en Arduino. Aprenderán su primer 
									lenguaje de programación formal.
								</li>
								<li><b>Tera Squad (11-13 años):</b> Este es el nivel más avanzado de los tres. Aquí se trabajará de forma más 
									profunda en programación con el lenguaje de programación Python y otros lenguajes reales como HTML y JavaScript.
									Además, trabajarán la electrónica y robótica mediante un proyecto de aplicación real.
								</li>
							</ul>
						</p>
					<br>
					<h2>Horarios</h2>
					<p>
						<ul>
							<li>Cada grupo tiene dos clases a la semana de 1 hora y 15 minutos cada una.</li>
							<li>La actividad de todos los grupos se hará en remoto con 2 sesiones presenciales opcionales al mes.</li>
						</ul>
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="3" name="id" class="info1">
							<input type="text" value="My Robotic Friends" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.3" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.3">★</label><!--
									  --><input  id="radio2.3" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.3">★</label><!--
									  --><input  id="radio3.3" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.3">★</label><!--
									  --><input  id="radio4.3" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.3">★</label><!--
									  --><input  id="radio5.3" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.3">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.hackaboss.dev/bootcamp-kids" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-4">
			<div class="popup">
				<div class="img-2"></div>
				<div class="text">
					<h1>Robótica</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(4);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Coursera/UNAM</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						¿Te gustaría construir un robot y controlarlo a través de tu celular? ¡Estás en el curso indicado! 
						Aquí podrás armar y animar un robot además de controlarlo con tu teléfono móvil, aun cuando te encuentres 
						lejos de éste. 
						¿No sabes acerca de mecánica, electrónica o programación? ¡No te preocupes! Éste es un curso en el que aplicarás 
						los conocimientos básicos sobre mecánica, electricidad, electrónica y programación para construir y controlar tu robot. 
						Parece complicado, pero no te preocupes, ya verás que resulta muy sencillo. El único requisito es que tengas interés por aprender sobre robótica móvil. 
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li>Semana 1</li>
									<ul>
										<li>¿Cómo trabajaremos en este curso?</li>
										<li>Hablemos sobre robots</li>
									</ul>
								<li>Semana 2</li>
									<ul>
										<li>Construyendo mi primer robot</li>
									</ul>
								<li>Semana 3</li>
									<ul>
										<li>Controlando mi robot</li>
									</ul>
								<li>Semana 4</li>
									<ul>
										<li>Programando mi robot</li>
									</ul>
								<li>Semana 5</li>
									<ul>
										<li>¿Qué más podemos construir?</li>
									</ul>
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>Gratis</p>
					<br>
					<h2>Duración</h2>
					<p>11 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="4" name="id" class="info1">
							<input type="text" value="Empresa/Organización que lo imparte" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.4" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.4">★</label><!--
									  --><input  id="radio2.4" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.4">★</label><!--
									  --><input  id="radio3.4" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.4">★</label><!--
									  --><input  id="radio4.4" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.4">★</label><!--
									  --><input  id="radio5.4" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.4">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.coursera.org/learn/robotica-inicial" target="_blank">INSCRIBIRME</a>
						
					</button>			
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-5">
			<div class="popup">
				<div class="img-1"></div>
				<div class="text">
					<h1>Programación Web</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(5);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">BEDU</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Aprende a programar en JavaScript, uno de los lenguajes más populares de la
						web y construye plataformas digitales interactivas desde cero.
					</p>
					<br>
					<h2>Precio</h2>
					<p>$4,944.16 MXN mensuales</p>
					<br>
					<h2>Duración</h2>
					<p>6 meses</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="5" name="id" class="info1">
							<input type="text" value="Programación Web" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  	 <input  id="radio1.5" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.5">★</label><!--
									  --><input  id="radio2.5" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.5">★</label><!--
									  --><input  id="radio3.5" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.5">★</label><!--
									  --><input  id="radio4.5" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.5">★</label><!--
									  --><input  id="radio5.5" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.5">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://n9.cl/a6k7j" target="_blank">INSCRIBIRME</a>
						
					</button>					
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-6">
			<div class="popup">
				<div class="img-1"></div>
				<div class="text">
					<h1>MATLAB</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(6);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Stacksocial</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Este curso cuenta con 6 cursos distintos, el cual cada uno tiene una aplicación
						para MATLAB:
						<ol class="justificar">
							<li><b>Simulaciones de electrónica de potencia en MATLAB:</b> Simule circuitos electrónicos de potencia famosos en MATLAB como
								rectificadores, interruptores de CC, interruptores de CA e inversores.
							</li>
							<li><b>Simulación de sistemas de energía solar, máquinas de CC y máquinas de
								inducción:</b> MATLAB es un software líder en computación numérica y algoritmos de
								construcción que son ampliamente utilizados por ingenieros, programadores,
								investigadores, profesores, universidades y emprendedores.
							</li>
							<li><b>Aprenda a simular un generador síncrono en un sistema de energía:</b> Importación 
								de PSCAD a programa MATLAB y controlador PID.
							</li>
							<li><b>Programación completa de MATLAB para principiantes:</b> Distíngase como usuario y programador de MATLAB.
							</li>
							<li><b>Clase magistral de MATLAB / SIMULINK:</b> Aprenda modelado y simulación en MATLAB / SIMULINK desde cero
								mediante aplicaciones de la vida real.
							</li>
							<li><b>Preprocesamiento de datos para el aprendizaje automático con MATLAB:</b> Implemente técnicas de preprocesamiento de datos de uso común en
								MATLAB con ejemplos prácticos, proyectos y conjuntos de datos.
							</li>
						</ol>
					</p>
					<br>
					<h2>Precio</h2>
					<p>$34.99 USD</p>
					<br>
					<h2>Duración</h2>
					<p>24 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="6" name="id" class="info1">
							<input type="text" value="MATLAB" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.6" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.6">★</label><!--
									  --><input  id="radio2.6" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.6">★</label><!--
									  --><input  id="radio3.6" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.6">★</label><!--
									  --><input  id="radio4.6" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.6">★</label><!--
									  --><input  id="radio5.6" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.6">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://stacksocial.com/sales/the-complete-matlab-programming-certificationbundle?
						
						utm_source=pcmag.com&utm_medium=referral&utm_campaign=thecomplete-
						<br><br>
						
						matlab-programming-certification-bundle&utm_term=scsf-
						433285&utm_content=a0x1P000004Y7VtQAK&scsonar=1&aid=a-pn8webp0" target="_blank">INSCRIBIRME</a>
					</button>					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-7">
			<div class="popup">
				<div class="img-1"></div>
				<div class="text">
					<h1>C/C++</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(7);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Developer Bootcamp</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						En el curso de Programación en C, los estudiantes conocen todos los elementos
						principales del lenguaje, incluidos los tipos de datos fundamentales, el control
						de flujo y las bibliotecas de funciones estándar. El curso de C++ introduce
						conceptos básicos de programación orientada a objetos, incluida la herencia, la
						encapsulación y el polimorfismo. La sintaxis y el estilo de C++ se enseñan en
						el contexto del uso de métodos orientados a objetos para lograr reutilización,
						adaptabilidad y confiabilidad. Los estudiantes pueden utilizar Microsoft Visual
						Studio para completar laboratorios prácticos o un entorno basado en UNIX si lo
						desean.
					</p>
					<br>
					<h2>Precio</h2>
					<p>
						<ul>
							<li><b>Pista de 2 cursos:</b> $2,400 MXN</li>
							<li><b>Pista de 3 cursos:</b> $3,600 MXN</li>
							<li><b>Pista de 4 campos:</b> $4,800 MXN</li>
						</ul>
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="7" name="id" class="info1">
							<input type="text" value="C/C++" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.7" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.7">★</label><!--
									  --><input  id="radio2.7" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.7">★</label><!--
									  --><input  id="radio3.7" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.7">★</label><!--
									  --><input  id="radio4.7" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.7">★</label><!--
									  --><input  id="radio5.7" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.7">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.developer-bootcamp.com/c-programmer.htm" target="_blank">INSCRIBIRME</a>
						
					</button>					
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-8">
			<div class="popup">
				<div class="img-1"></div>
				<div class="text">
					<h1>Java</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(8);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Formadores IT</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Este Bootcamp esta diseñado para impartir 432 horas prácticas desde
						desarrollo de soluciones empresariales, diseño e implementación de
						arquitecturas web Java EE hasta el desarrollo de aplicaciones corporativas.
					</p>
					<br>
					<h2>Precio</h2>
					<p>4500 €</p>
					<br>
					<h2>Duración</h2>
					<p>7 meses</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="8" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.8" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.8">★</label><!--
									  --><input  id="radio2.8" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.8">★</label><!--
									  --><input  id="radio3.8" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.8">★</label><!--
									  --><input  id="radio4.8" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.8">★</label><!--
									  --><input  id="radio5.8" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.8">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="http://www.formadoresit.es/formacion-en-empresas/formacion/meanstack/bootcamps/java-javascript-landing/" target="_blank">INSCRIBIRME</a>
						<br><br>
						
					</button>
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-9">
			<div class="popup">
				<div class="img-1"></div>
				<div class="text">
					<h1>Python</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(9);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Coding Nomads</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Aprenda a pensar como un desarrollador, cómo aprender, comunidades de
						programación a las que unirse y sobre los casos de uso de Python.
					</p>
					<br>
					<h2>Precio</h2>
					<p>
						<ul>
							<li>Contenido + Foro: $9 USD mensuales</li>
							<li>Paquete premium: $29 USD mensuales</li>
							<li>Programa intensivo de mes a mes: $750 USD mensuales</li>
							<li>Programa intensivo de 3 meses: $2100 USD</li>
						</ul>
					</p>
					<br>
					<h2>Duración</h2>
					<p>200 horas + 9 horas de videos altamente enfocados y digeribles</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="9" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.9" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.9">★</label><!--
									  --><input  id="radio2.9" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.9">★</label><!--
									  --><input  id="radio3.9" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.9">★</label><!--
									  --><input  id="radio4.9" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.9">★</label><!--
									  --><input  id="radio5.9" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.9">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://codingnomads.co/courses/python-bootcamp-online/" target="_blank">INSCRIBIRME</a>
						
					</button>				
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-10">
			<div class="popup">
				<div class="img-3"></div>
				<div class="text">
					<h1>Adobe illustrator</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(10);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Instituto Americano de Gráficos</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Se centra en los conceptos básicos que necesita saber para comenzar a diseñar
						en Illustrator. A través de un enfoque súper acelerado del mundo real,
						aprenderá cómo crear diferentes activos que una empresa necesita, así como
						consejos y trucos para asegurarse de que sus diseños se destaquen. Ya sea
						que sea un diseñador o un estudiante que desea mejorar sus habilidades, o un
						líder empresarial que desea producir sus propios gráficos listos para imprimir,
						este curso de 10 partes de uno de los mejores instructores de Illustrator del
						mundo le mostrará cómo hacerlo.
					</p>
					<br>
					<h2>Precio</h2>
					<p>$1,690 MXN</p>
					<br>
					<h2>Próximas fechas y horarios</h2>
					<p>
						<ul>
							<li>Martes 6 de julio de 2021 al viernes 9 de julio de 2021, de 10:00 a.m. A 5:00 p.m.</li>
							<li>Martes 7 de septiembre de 2021 al viernes 10 de septiembre de 2021, de 10:00 a.m. A 5:00 p.m.</li>
							<li>Lunes 29 de noviembre de 2021 al jueves 2 de diciembre de 2021, de 10:00 a.m. a 5:00 p.m.</li>
						</ul>
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="10" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.10" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.10">★</label><!--
									  --><input  id="radio2.10" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.10">★</label><!--
									  --><input  id="radio3.10" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.10">★</label><!--
									  --><input  id="radio4.10" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.10">★</label><!--
									  --><input  id="radio5.10" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.10">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.agitraining.com/adobe/illustrator/classes/illustrator-bootcamp" target="_blank">INSCRIBIRME</a>
						
					</button>	
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-11">
			<div class="popup">
				<div class="img-3"></div>
				<div class="text">
					<h1>Adobe Photoshop</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(11);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Creative Live</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Adobe® Photoshop CC® es una herramienta valiosa para los fotógrafos,
						pero también puede resultar intimidante. En este curso de 20 lecciones
						con todo incluido, pasará de abrir el programa por primera vez a crear
						imágenes que realmente se destaquen. Únase a Blake Rudis, experto en
						Photoshop y fundador de f64 Academy, mientras le muestra cómo
						maximizar el uso de Photoshop. Adobe® Photoshop CC® es una
						herramienta valiosa para los fotógrafos, pero también puede resultar
						intimidante. En este curso de 20 lecciones con todo incluido, pasará de
						abrir el programa por primera vez a crear imágenes que realmente se
						destaquen. Únase a Blake Rudis, experto en Photoshop y fundador de f64
						Academy, mientras le muestra cómo maximizar el uso de Photoshop.
					</p>
					<br>
					<h2>Precio</h2>
					<p>$199 USD</p>
					<br>
					<h2>Duración</h2>
					<p>22 horas divididas en 118 lecciones</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="11" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  <input  id="radio1.11" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.11">★</label><!--
									  --><input  id="radio2.11" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.11">★</label><!--
									  --><input  id="radio3.11" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.11">★</label><!--
									  --><input  id="radio4.11" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.11">★</label><!--
									  --><input  id="radio5.11" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.11">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.creativelive.com/class/adobe-photoshop-cc-bootcamp-blake-rudis" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-12">
			<div class="popup">
				<div class="img-3"></div>
				<div class="text">
					<h1>Filmora Premiere</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(12);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Creatubers</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Aprende todo lo que necesitas saber para trabajar con Filmora, la última versión
						del mejor programa para adentrarse en el mundo de la edición de vídeo. En este
						curso, de cuatro horas de duración, vas a conocer y profundizar en el manejo
						de este programa con ejemplos prácticos, consejos para trabajar de manera
						más fluida y material que puedes descargar para que practiques lo aprendido y
						consolides mejor tus conocimientos.
						Este curso planta un árbol
						A partir de ahora, si compras este curso estarás plantando un árbol. Porque
						Creatubers se ha aliado con One Tree Planted para invertir un dólar de cada
						curso comprado en plantar árboles en Guatemala, Amazonas y los Andes.
					</p>
					<br>
					<h2>Precio</h2>
					<p>11.00 €</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="12" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									  	 <input  id="radio1.12" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.12">★</label><!--
									  --><input   id="radio2.12" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.12">★</label><!--
									  --><input   id="radio3.12" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.12">★</label><!--
									  --><input   id="radio4.12" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.12">★</label><!--
									  --><input   id="radio5.12" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.12">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://cutt.ly/0b3EWO7" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-13">
			<div class="popup">
				<div class="img-4"></div>				<div class="text">
					<h1>Backend</h1>
					<br>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(13);
					?>
					</div>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Lemoncode</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Este Bootcamp cubre dos aproximaciones: modelado relacional (tomaremos como motor de bases de datos relacional SQL Server), y documental ( tomando como motor de base de datos documental MongoDB ).
						En este Bootcamp cubriremos tecnologías y proveedores de cloud tales como:
						NodeJS, Express, Mongoose, Mongo, GraphQL, .net 5, Entity Framework, SQL Server, TypeScript, C#, Heroku, Amazon, Azure
						El bootcamp está especialmente diseñado para los profesionales del sector. 100% online, puedes seguir las clases en vivo donde mejor te venga y desde tu dispositivo preferido, PC, tablet, móvil, solo te hace falta una conexión a internet.
						Si estás desempleado, te puedes beneficiar de un descuento en tu matrícula. Envíanos por email tu dni y tarjeta de demandante de empleo escaneados.						
					</p>
					<br>
					<h2>Precio</h2>
					<p>1890 €</p>
					<br>
					<h2>Duración</h2>
					<p>6 meses con un total de 132 horas de docencia y 108 horas de trabajo estimado del alumno.</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="13" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input   id="radio1.13" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.13">★</label><!--
									  --><input   id="radio2.13" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.13">★</label><!--
									  --><input   id="radio3.13" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.13">★</label><!--
									  --><input   id="radio4.13" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.13">★</label><!--
									  --><input   id="radio5.13" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.13">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://lemoncode.net/bootcamp-backend#bootcamp-backend/docentes" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-14">
			<div class="popup">
				<div class="img-4"></div>
				<div class="text">
					<h1>Frontend</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(14);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Ironhack</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Conviértete en un desarrollador web full-stack: aprende a programar tus propias aplicaciones web desde cero y empieza aquí tu carrera en tecnología. En formato de tiempo completo o parcial.
						En el programa Full Time tendrás que asistir a clase de lunes a viernes de 9am a 6pm y luego tendrás muchas horas de trabajo extra. Es un curso súper intensivo, incompatible con trabajo o estudios.
						En el programa Part Time, tendrás clases dos días por la tarde entre semana y los sábados. Es compatible con el trabajo u otras circunstancias, pero todo tu tiempo libre deberás dedicarlo al programa. 
						Calculamos que deberás invertir al menos 15 horas semanales aproximadamente, además de la asistencia a clase. Los objetivos de este bootcamp son: <br><br>
						<ul>
							<li>Aprender HTML, CSS y JavaScript</li>
							<li>Adquirir experiencia en marcos de como «express-back-end» y «react-front-end»</li>
							<li>Convertirte en un experto en control de versiones con Git y GitHub</li>
							<li>Aumenta tus conocimientos sobre servidores y alojamiento</li>
							<li>Comprender cómo trabajar con bases de datos</li>
							<li>Adoptar la metodología ágil</li>
							<li>Consolidar tus habilidades de resolución de problemas y pensamiento analítico</li>
							<li>Pon en práctica la perseverancia y la atención al detalle necesaria para realizar proyectos complejos en plazos ajustados</li>
							<li>Demuestra tu creatividad con los proyectos del bootcamp</li>
							<li>Sigue aprendiendo después de graduarte formando parte de la comunidad de Ironhack</li>
						</ul>
						
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>Actualmente en línea por COVID, después volverá la modalidad presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.794565041354!2d-99.16531808561803!3d19.421280246076336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3746a2e079%3A0x422fa4858844d058!2sTonal%C3%A1%2010%2C%20Roma%20Nte.%2C%20Cuauht%C3%A9moc%2C%2006700%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622589951595!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="14" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.14" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.14">★</label><!--
									  --><input  id="radio2.14" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.14">★</label><!--
									  --><input  id="radio3.14" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.14">★</label><!--
									  --><input  id="radio4.14" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.14">★</label><!--
									  --><input  id="radio5.14" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.14">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://www.ironhack.com/es/desarrollo-web" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-15">
			<div class="popup">
				<div class="img-4"></div>
				<div class="text">
					<h1>FullStack Madrid</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(15);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">SkyLab Codes Academy</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						¿Quieres aprender las tecnologías y metodologías necesarias para realizar una aplicación web completa? 
						¿Quieres aprender los fundamentos de programación necesarios para iniciar tu carrera como programador? 
						En nuestro curso intensivo full time aprenderás a programar front-end, back-end, con las herramientas, 
						tecnologías y metodologías necesarias para comenzar tu carrera como programador informático.<br><br>
						<b>Perfil buscado:</b><br>
						<ul>
							<li>Personas sin experiencia previa pero con una alta motivación para acceder al sector</li>
							<li>Autodidactas que necesitan solidificar sus bases de programación</li>
							<li>Estudiantes de programas online que necesitan aprender a un ritmo guiado y mucho más alto</li>
							<li>Estudiantes de FP (DAW, DAM) o Ingeniería Informática que quieren aprender las tecnologías modernas de desarrollo web</li>
							<li>Estudiantes de otros cursos o Bootcamps que quieren profundizar y solidificar conocimientos</li>
							<li>Ingenieros de software que quieren reciclarse en tecnologías y metodologías modernas</li>
							<li>Expertos en SEO</li>
							<li>Diseñadores gráficos o maquetadores que quieren añadir la programación a su curriculum</li>
							<li>Profesionales que trabajan con desarrolladores que necesitan conocer las piezas de una aplicación web.</li>
						</ul>
					</p>
					<br>
					<h2>Duración</h2>
					<p>11 semanas de 9h a 17h, de lunes a viernes</p>
					<br>
					<h2>Modalidad</h2>
					<p>Presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.783589475123!2d-3.7037806851047583!3d40.43579066240487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228f50ac57657%3A0x60b00d2d2cd7971b!2sCalle%20de%20Viriato%2C%2020%2C%2028010%20Madrid%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2smx!4v1622590712917!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="15" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.15" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.15">★</label><!--
									  --><input  id="radio2.15" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.15">★</label><!--
									  --><input  id="radio3.15" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.15">★</label><!--
									  --><input  id="radio4.15" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.15">★</label><!--
									  --><input  id="radio5.15" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.15">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://www.skylabcoders.com/es/full-time-format-bootcamp-barcelona_5278" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-16">
			<div class="popup">
				<div class="img-4"></div>
				<div class="text">
					<h1>FullStack</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(16);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Udemy</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Este curso está pensado para alumnos con cualquier nivel de experiencia. Comienza desde cero y va aumentando el nivel hasta convertirte en programador web.
						Aprenderás las tecnologías más usadas por las empresas y startups, el objetivo principal es que consigas un trabajo de desarrollador/a web al finalizar el curso.
						<br><br>
						<ul>
							<li>Clases de teoría con ejemplos guiados</li>
							<li>Cuestionarios multiple choice</li>
							<li>Ejercicios de HTML y CSS</li>
							<li>Proyecto con solución</li>
						</ul>
						<br><br>
						<b>¿Para quién es este curso?</b><br>
						<ul>
							<li>Cualquier persona con interés de aprender a programar</li>
							<li>Desarrolladores que quieran aprender el stack de Django</li>
							<li>Emprendedores</li>
							<li>Personas que buscan impulsar su carrera</li>
						</ul>						
					</p>
					<br>
					<h2>Precio</h2>
					<p>$1790 MXN</p>
					<br>
					<h2>Duración</h2>
					<p>7 secciones • 49 clases • 8 h 20 m de duración total</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="16" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.16" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.16">★</label><!--
									  --><input  id="radio2.16" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.16">★</label><!--
									  --><input  id="radio3.16" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.16">★</label><!--
									  --><input  id="radio4.16" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.16">★</label><!--
									  --><input  id="radio5.16" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.16">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.udemy.com/course/bootcamp-de-desarrollo-web/?utm_source=adwords&utm_medium=udemyads&utm_campaign=DSA-WebIndex_la.ES_cc.MX&utm_content=deal4584&utm_term=_._ag_124787779331_._ad_504973666492_._kw__._de_c_._dm__._pl__._ti_dsa-1052284100117_._li_9073830_._pd__._&matchtype=b&gclid=CjwKCAjw1uiEBhBzEiwAO9B_HSVyj00dY-_blk6X15LJwrsww9S5t1qxszXNqOvp1nozNHTBKj1l1RoCqpgQAvD_BwE" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-17">
			<div class="popup">
				<div class="img-4"></div>
				<div class="text">
					<h1>UX-UI</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(17);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">DEVF.LA</p>
					<br>
					<h2>Contenido</h2>
						<p class="justificar">
							<b>UX</b>
							<ul>
								<li>Bases del diseño</li>
								<li>Sprint</li>
								<li>Product design</li>
								<li>Service design</li>
							</ul>
							<br>
							<b>Proceso creativo</b>
							<ul>
								<li>Obtención de insights</li>
								<li>Proceso creativo</li>
								<li>Generación de valor</li>
								<li>Métodos de investigación</li>
							</ul>
							<br>
							<b>Diseño visual</b>
							<ul>
								<li>Color, branding básico, tipografías</li>
								<li>Filosofías de diseño</li>
								<li>Evolución de los medios digitales</li>
							</ul>
							<br>
							<b>UI</b>
							<ul>
								<li>Atomic design</li>
								<li>Arquitectura de la información</li>
								<li>Responsive design</li>
								<li>Micro interacciones</li>
								<li>Master en UX / UI</li>
							</ul>
							<br>
							El diploma con rastreo por Blockchain que otorga Dev.f tiene un alto valor en la industria tech en Latinoamérica
							Campus es nuestra plataforma complementaria de educación.<br>Cuenta con material de apoyo, lecturas y videos para uso libre por parte de nuestr@s alumn@s.
						</p>
					<br>
					<h2>Precio</h2>
					<p>Mensualidades desde $2,999 MXN</p>
					<br>
					<h2>Duración</h2>
					<p>52 semanas, 240 horas de clase</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="17" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.17" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.17">★</label><!--
									  --><input  id="radio2.17" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.17">★</label><!--
									  --><input  id="radio3.17" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.17">★</label><!--
									  --><input  id="radio4.17" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.17">★</label><!--
									  --><input  id="radio5.17" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.17">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://devf.la/master/design/mx?utm_source=google&utm_medium=search&utm_term=curso%20de%20dise%C3%B1o%20ux&utm_campaign=Master+UX/UI+Gen+6&utm_source=adwords&utm_medium=ppc&hsa_acc=9274428682&hsa_cam=12702112993&hsa_grp=120015419189&hsa_ad=512949372888&hsa_src=g&hsa_tgt=kwd-304541476749&hsa_kw=curso%20de%20dise%C3%B1o%20ux&hsa_mt=b&hsa_net=adwords&hsa_ver=3&gclid=CjwKCAjw1uiEBhBzEiwAO9B_HR_Xx2WxXtSSD3H8qTbskvirufW2IeqgzSJ33dkgRbeC6URKWAhtZBoCjmwQAvD_BwE" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-18">
			<div class="popup">
				<div class="img-5"></div>
				<div class="text">
					<h1>Bootcamp intensivo de Ciberseguridad</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(18);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Ironhack</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						La falta de trabajadores de ciberseguridad sigue siendo un punto débil crítico para las empresas y países. 
						Se necesitan soluciones para crear la fuerza de trabajo en materia de seguridad cibernética necesaria en un 
						mundo interconectado. Fórmate en la industria de la ciberseguridad con nuestro bootcamp intensivo impulsado 
						por Cybint. Puedes convertirte en un profesional en el área de la ciberseguridad sin necesidad de tener ningún 
						conocimiento previo.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li><b>Módulo 1. Introducción a la Ciberseguridad:</b> En el módulo 1 cubriremos todo lo necesario para 
									tener un "mindset" de ciberseguridad. Desde la introducción a los conceptos básicos más relevantes, 
									hasta ejercicios prácticos sobre cada uno de los temas necesarios para entrar en la industria de la ciberseguridad.
								</li>
								<li><b>Módulo 2. Seguridad y Amenazas:</b> En este módulo aprenderás a construir un programa de seguridad, así como identificar 
									y abordar los principios y las amenazas más comunes en el entorno actual. Trabajarás en proyectos en los que tendrás 
									que asegurarte de que existe un cierto nivel de seguridad en la red mediante controles de acceso y técnicas de endurecimiento, 
									además de aprender a configurar y utilizar un "Firewall". Crear una red segura no siempre será suficiente, y también aprenderás 
									y crearás tu propio sistema de detección y prevención, así como a configurar y utilizar un sistema de gestión de eventos sobre 
									información de seguridad para detectar y analizar las amenazas.
								</li>
								<li><b>Módulo 3. Proyectos reales para tu nueva carrera:</b> Durante el último módulo del Bootcamp empezarás a proteger contra ataques 
									cibernéticos en tiempo real mientras consolidas los conocimientos adquiridos en los módulos anteriores, realizando análisis de 
									seguridad y evaluando la arquitectura, así como un análisis estático y dinámico de las diferentes fuentes de datos.
								</li>
							</ul>
						</p>
					<br>
					<h2>Duración, horarios y costos</h2>
					<p>
						<ul>
							<li>12 semanas, lunes a viernes de 9:00 a 18:00, $90,000 MXN</li>
							<li>24 semanas, lunes y miércoles de 18:30 a 21:30 y sábados de 10:00 a 17:00, $103,000 MXN </li>
						</ul>
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.794682184702!2d-99.16531808509349!3d19.421275186890668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3746a2e079%3A0x422fa4858844d058!2sTonal%C3%A1%2010%2C%20Roma%20Nte.%2C%20Cuauht%C3%A9moc%2C%2006700%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622600811815!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="18" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.18" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.18">★</label><!--
									  --><input  id="radio2.18" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.18">★</label><!--
									  --><input  id="radio3.18" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.18">★</label><!--
									  --><input  id="radio4.18" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.18">★</label><!--
									  --><input  id="radio5.18" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.18">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.ironhack.com/es/ciberseguridad" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-19">
			<div class="popup">
				<div class="img-5"></div>
				<div class="text">
					<h1>Bootcamp Online Ciberseguridad</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(19);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">GeeksHubs</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						<ul>
							<li>Conocerás el mundo de la ciberseguridad y sus diferentes ramas de actuación.</li>
							<li>Aprenderás a realizar auditorías de seguridad y evaluar la seguridad de una organización.</li>
							<li>Conocerás las técnicas ofensivas que son empleadas por los profesionales del sector.</li>
							<li>Conocerás los secretos de la fortificación de redes y sistemas.</li>
							<li>Aprenderás a proteger entornos cloud y los mínimos requeridos en el mundo DevOps.</li>
							<li>Especialízate en un perfil cada vez más necesario y demandado.</li>
						</ul>						
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<li><b>Módulo 1.</b> Ciberseguridad y Seguridad Informática</li>
							<li><b>Módulo 2.</b> Ciberinteligencia</li>
							<li><b>Módulo 3.</b> Auditoría y Hacking de Sistemas</li>
							<li><b>Módulo 4.</b> Auditoría y Hacking Web</li>
							<li><b>Módulo 5.</b> Evaluación de la seguridad en la red</li>
							<li><b>Módulo 6.</b> Auditoría de redes inalámbricas</li>
							<li><b>Módulo 7.</b> Hardening de redes empresariales</li>
							<li><b>Módulo 8.</b> Hardening de Servidores</li>
							<li><b>Módulo 9.</b> Criptografía aplicada a la Ciberseguridad</li>
							<li><b>Módulo 11.</b> Forense digital y respuesta ante incidentes</li>
							<li><b>Módulo 12.</b> SecDevOps</li>
							<li><b>Proyecto Final</b></li>
						</p>
					<br>
					<h2>Precio</h2>
					<p>$3,000 USD</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="19" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.19" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.19">★</label><!--
									  --><input  id="radio2.19" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.19">★</label><!--
									  --><input  id="radio3.19" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.19">★</label><!--
									  --><input  id="radio4.19" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.19">★</label><!--
									  --><input  id="radio5.19" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.19">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://bootcamp.geekshubsacademy.com/online/ciberseguridad/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-20">
			<div class="popup">
				<div class="img-5"></div>
				<div class="text">
					<h1>Cibersecurity Bootcamp</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(20);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">NEOLAND</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Cada vez más compañías tienen en cuenta la ciberseguridad en todos sus procesos, esto hace que haya una falta de 
						profesionales en este momento, siendo el experto en ciberseguridad una de las profesiones más solicitadas.<br>
						Este Bootcamp de Ciberseguridad está dirigido a personas que, sin experiencia previa, quieran adquirir todos los 
						conocimientos necesarios para dedicarse profesionalmente a la ciberseguridad, ya que en el curso se aprende desde 
						la parte de Red Team hasta la de Blue Team.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li><b>Módulo 1.</b> Fundamentos</li>
								<li><b>Módulo 2.</b> Red Team Básico</li>
								<li><b>Módulo 3.</b> Red Team Avanzado</li>
								<li><b>Módulo 4.</b> Blue Team: Análisis y Respuesta</li>
								<li><b>Módulo 5.</b> Blue Team: Threat Hunting</li>
								<li><b>Módulo 6.</b> Ciberinteligencia</li>
								<li><b>Módulo 7.</b> Proyecto Final</li>
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>
						<ul>
							<li><b>Full Time:</b> $6,500 USD</li>
							<li><b>Part Time:</b> $7,900 USD</li> 
						</ul>
					</p>
					<br>
					<h2>Duración y horarios</h2>
					<p>
						<ul>
							<li><b>Full Time:</b> 12 semanas, lunes a jueves de 9:00 a 18:00 y los viernes de 9:00 a 13:00.</li>
							<li><b>Part Time:</b> 36 semanas, lunes a viernes de 19:00 a 21:00.</li>
						</ul>
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="20" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.20" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.20">★</label><!--
									  --><input  id="radio2.20" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.20">★</label><!--
									  --><input  id="radio3.20" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.20">★</label><!--
									  --><input  id="radio4.20" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.20">★</label><!--
									  --><input  id="radio5.20" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.20">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.neoland.es/cybersecurity-bootcamp?c=online" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-21">
			<div class="popup">
				<div class="img-5"></div>
				<div class="text">
					<h1>Ciberseguridad 360</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(21);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Instituto Internacional De Seguridad Cibernética</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Este curso de ciberseguridad le proporcionará las habilidades necesarias para desarrollar e implementar las mejores 
						políticas empresariales de seguridad informática y una estrategia de evaluación de riesgos de seguridad. Nuestro curso 
						de ciberseguridad 360 le mostrará los métodos más eficientes para hacer pruebas de penetración en cualquier red, sistema 
						informático o servidores para encontrar vulnerabilidades explotables.<br>
						También se le capacitará en el proceso de desarrollo y uso de exploits para tomar control de cualquier red o dispositivo. 
						El curso de ciberseguridad 360 no sólo se enfoca en la explotación de vulnerabilidades, sino también en la implementación 
						de medidas de seguridad.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li><b>Módulo 1. Evaluación:</b> Este es un módulo completamente práctico donde le enseñaremos a evaluar la ciberseguridad de 
									una arquitectura existente. Además, aprenderá a realizar evaluaciones de vulnerabilidad y pruebas de penetración en 
									toda clase de dispositivos. 
								</li>
								<li><b>Módulo 2. Conceptos:</b> Este es un módulo teórico y práctico en el que se reforzarán todos los conceptos a través de escenarios 
									comerciales reales. En este módulo aprenderá todos los conceptos de hacking ético, forense digital, hacking de móviles, análisis 
									de malware, desarrollo de exploits y seguridad en la nube. 
								</li>
								<li><b>Módulo 3. Cuarto de Guerra:</b> Este es un módulo completamente práctico para simular ataques cibernéticos y practicar todos los 
									conceptos vistos durante el curso de ciberseguridad 360. Durante este módulo, el participante tendrá que atacar dispositivos 
									sin parches, así como completamente parcheados. En este módulo, usted deberá hackear y proteger nuestra infraestructura en 
									tiempo real y realizar análisis forenses de la escena del crimen. 
								</li>
								<li><b>Módulo 4. Mitigación-implementación de seguridad:</b> Este es un módulo completamente práctico para aprender sobre la implementación 
									de la arquitectura de seguridad, las mejores prácticas de la industria y la mitigación de riesgos de seguridad. 
								</li>
								<li><b>Módulo 5. Proyecto de ciberseguridad:</b> Este módulo consiste en un proyecto de ciberseguridad, presentado de forma online, en el 
									que cada participante puede formar parte de uno de nuestros proyectos. Al final de la capacitación de ciberseguridad, se le asignará 
									uno de los múltiples proyectos de ciberseguridad para evaluar las habilidades que ha aprendido durante el curso. Trabajará en proyectos 
									de forma online e interactuará con nuestros expertos para resolver todas sus dudas y entregables.
								</li>							
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>
						<ul>
							<li>$1,800 USD en forma <b>presencial</b></li>
							<li>$1,000 USD en forma <b>online</b></li>
						</ul>
					</p>
					<br>
					<h2>Duración</h2>
					<p>80 horas y puede extenderse hasta 200 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.472896536404!2d-99.19312968509328!3d19.43516768688292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20200a407dc1b%3A0xcbcd423cfcdaef6f!2sTraveline.mx!5e0!3m2!1ses-419!2smx!4v1622602548709!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="21" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.21" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.21">★</label><!--
									  --><input  id="radio2.21" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.21">★</label><!--
									  --><input  id="radio3.21" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.21">★</label><!--
									  --><input  id="radio4.21" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.21">★</label><!--
									  --><input  id="radio5.21" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.21">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.iicybersecurity.com/ciberseguridad.html" target="_blank">INSCRIBIRME</a>
						
					</button>	
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-22">
			<div class="popup">
				<div class="img-5"></div>
				<div class="text">
					<h1>Fullstack Cibersecurity Bootcamp</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(22);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Keepcoding</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						El objetivo del Bootcamp en Ciberseguridad es formar cualquier tipo de perfil tecnológico que busque especializarse 
						en seguridad informática.<br>
						Enfocando los conocimientos adquiridos para trabajar como Pentester / Hacker Ético, Consultor Compliance de Seguridad, 
						Arquitecto de Seguridad Cloud, Consultor de Seguridad de Aplicativos Móviles, Analista Forense.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li><b>Pre-bootcamp:</b> Productividad, Networking, Linux, Python, Docker, Ciberseguridad enfocada en Pentesting, Desarrollo seguro de aplicaciones.</li>
								<li><b>Módulos iniciales:</b> Cybersecurity 101, Introducción a la Ciberseguridad.</li>
								<li><b>Criptografía:</b> Cifrado y Criptografía, Post-Quantum, OpenSSL,VeraCrypt, Encrypted Evidence.</li>
								<li><b>Ataque y defensa:</b> Recopilación de información, pentesting, blue team, análisis de Malware, machine learning, red team.</li>
								<li><b>Master Classes:</b> Gestión de Proyectos Ágiles “Scrum”, emprendimiento, pitch.</li>							
							</ul>
						</p>
					<br>
					<h2>Duración</h2>
					<p>
						<ul>
							<li>Siete meses de clases lectivas</li>
							<li>Distribuidas por módulos para permitir conciliar trabajo y formación</li>
							<li>2 semanas seguidas con clases de 4h cada, Lunes, Martes, y Jueves</li>
							<li>Seguidas de 1 semana sin clases lectivas, pero con soporte del profesor, para trabajar en la Práctica del Módulo y en consolidar los temas vistos</li>
						</ul>
					</p>
					<br>
					<h2>Requisitos mínimos</h2>
					<p>Máquina con mínimo 8Gb de RAM. Conocimientos básicos de Linux y de scripting (Python)</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="22" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.22" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.22">★</label><!--
									  --><input  id="radio2.22" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.22">★</label><!--
									  --><input  id="radio3.22" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.22">★</label><!--
									  --><input  id="radio4.22" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.22">★</label><!--
									  --><input  id="radio5.22" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.22">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://keepcoding.io/nuestros-bootcamps/bootcamp-en-ciberseguridad/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-23">
			<div class="popup">
				<div class="img-6"></div>
				<div class="text">
					<h1>Inteligencia Artificial en línea</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(23);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Universidad Adolfo Ibañez</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Formamos especialistas en Inteligencia Artificial, capaces de automatizar tareas complejas, a través del desarrollo, 
						diseño y evaluación de sistemas computacionales autónomos. Desarrollar soluciones tecnológicas basadas en IA, que 
						permitan mejorar las tareas de múltiples áreas productivas de las empresas y la toma de decisión estratégica, utilizando sistemas autónomos.						
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ol class="lista">
								<li>Introducción a la IA y ciencias cognitivas, representación de conocimientos y técnicas de búsqueda y heurísticas</li>
								<li>Aprendizaje autónomo, procesamiento de lenguaje natural y agentes inteligentes</li>
								<li>Robotica, Vision artificial y Proyecto Capstone</li>
							</ol>
						</p>
					<br>
					<h2>Precio</h2>
					<p>$127,191.84 MXN</p>
					<br>
					<h2>Duración</h2>
					<p>8 meses semanalmente de 17 a 21:30 hrs</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="23" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.23" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.23">★</label><!--
									  --><input  id="radio2.23" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.23">★</label><!--
									  --><input  id="radio3.23" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.23">★</label><!--
									  --><input  id="radio4.23" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.23">★</label><!--
									  --><input  id="radio5.23" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.23">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://ingenieria.uai.cl/diplomado/diplomado-en-inteligencia-artificial/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-24">
			<div class="popup">
				<div class="img-6"></div>
				<div class="text">
					<h1>Diplomado en nteligencia Artificial</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(24);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">UVM</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Contar con un perfil orientado hacia la Inteligencia Artificial (IA), el Machine Learning (ML) y el Deep Learning (DL) 
						es una necesidad latente.<br>
						Este programa integra contenidos de vanguardia en desarrollo tecnológico, diseñados específicamente para asegurar que 
						los egresados adquieran los conocimientos y competencias globales para la solución de problemáticas en diferentes sectores económicos, a través del análisis y la implementación de algoritmos de IA, ML y DL.					
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li>Introduction to Machine Learning and AI</li>
								<li>Ethics and Risks</li>
								<li>Introduction to DB</li>
								<li>Big Data Introduction</li>
								<li>NLP Introduction</li>
								<li>Building and Managing ML Teams</li>
							</ul>
						</p>
					<br>
					<h2>Duración</h2>
					<p>5 meses</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="24" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.24" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.24">★</label><!--
									  --><input  id="radio2.24" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.24">★</label><!--
									  --><input  id="radio3.24" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.24">★</label><!--
									  --><input  id="radio4.24" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.24">★</label><!--
									  --><input  id="radio5.24" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.24">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href=" https://uvm.mx/oferta-academica/diplomados-certificaciones/tecnologia-y-sistemas-en-linea-diplomados-y-certificaciones/inteligencia-artificial-diploma-en-linea" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>
		
		<div class="ctnt" id="modal-25">
			<div class="popup">
				<div class="img-6"></div>
				<div class="text">
					<h1>Inteligencia Artificial</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(25);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Instituto Artek</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						El crecimiento de la Inteligencia Artificial es tan acelerado, que se estima que para el año 2024, transformará 
						directamente cerca del 40% de los puestos de trabajo que actualmente conocemos.<br>
						Aprender a desarrollar algoritmos con Machine Learning, usar las redes neuronales y programar un Arduino.					
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li>Orígen de la Inteligencia Artificial</li>
								<li>Técnicas de la Inteligencia Artificial</li>
								<li>Inteligencia Artificial aplicando procesamiento embebido con Arduino</li>
								<li>Aplicaciones de Inteligencia Artificial</li>
								<li>Machine Learning</li>
								<li>Deep Learning</li>
								<li>Redes Neuronales</li>
								<li>Sensores e Inteligencia Artificial en Arduino</li>
								<li>Data set, gráficas y matrices en Python</li>
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>$30,000 MXN</p>
					<br>
					<h2>Duración</h2>
					<p>120 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>Presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.0760295651185!2d-99.16489908561888!3d19.36586034783076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffbeb4235093%3A0xbe4ce3096afe2931!2sAv.%20Cuauht%C3%A9moc%201461%2C%20Sta%20Cruz%20Atoyac%2C%20Benito%20Ju%C3%A1rez%2C%2003310%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622606529463!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="25" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.25" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.25">★</label><!--
									  --><input  id="radio2.25" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.25">★</label><!--
									  --><input  id="radio3.25" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.25">★</label><!--
									  --><input  id="radio4.25" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.25">★</label><!--
									  --><input  id="radio5.25" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.25">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://www.educaweb.mx/curso/diplomado-inteligencia-artificial-distrito-federal-363090/" target="_blank">INSCRIBIRME</a>
						
					</button>	
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-26">
			<div class="popup">
				<div class="img-7"></div>
				<div class="text">
					<h1>Data analytics bootcamp</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(26);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Iron Hack</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Durante tus primeras 60 horas como estudiante oficial de Data Analytics en Ironhack, 
						sentarás los cimientos para triunfar en Ciudad de México. Durante el prework, trabajarás en: <br><br>
						<ol>
							<li>Aprender los fundamentos de la interfaz de línea de comandos, Git, Python, MySQL y de análisis estadístico</li>
							<li>Familiarízate con los conceptos básicos de programación y estadística </li>
							<li>Conecta con tus compañeros y con el personal académico experto a través de nuestros canales de Slack</li>
						</ol>
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li><b>Módulo 1:</b> Introducción a y Python</li>
								<li><b>Módulo 2:</b> Análisis de datos avanzado</li>
								<li><b>Módulo 3:</b> Aprende los básicos de machine learning</li>
							</ul>
						</p>
					<br>
					<h2>Precios y horarios</h2>
					<p>
						<ul>
							<li><b>Tiempo completo: </b>9 semanas Lunes a Viernes de 9:00 a 18:00 hrs por $90,000 MXN</li>
							<li><b>Tiempo parcial: </b>24 semanas Lunes & Miercoles de 18:30 a 21:30 hrs o Sábados de 10:00 a 17:00 hrs por $103,000 MXN</li>
						</ul>
					</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.794565041354!2d-99.16531808561803!3d19.421280246076336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3746a2e079%3A0x422fa4858844d058!2sTonal%C3%A1%2010%2C%20Roma%20Nte.%2C%20Cuauht%C3%A9moc%2C%2006700%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622607463738!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="26" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.26" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.26">★</label><!--
									  --><input  id="radio2.26" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.26">★</label><!--
									  --><input  id="radio3.26" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.26">★</label><!--
									  --><input  id="radio4.26" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.26">★</label><!--
									  --><input  id="radio5.26" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.26">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://www.ironhack.com/es/data-analytics" target="_blank">INSCRIBIRME</a>
						
					</button>	
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-27">
			<div class="popup">
				<div class="img-7"></div>
				<div class="text">
					<h1>Data Analysis</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(27);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">BEDU</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Aprende a recopilar, procesar, analizar e interpretar grandes volúmenes de datos para generar reportes, 
						realizar predicciones y proponer estrategias de crecimiento.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ul class="lista">
								<li>Teoría en casa, asesoría con expertos en análisis de datos, proyectos personales y prototype (presentar proyectos ante un jurado especializado)</li>
								<li>Introducción a la base de datos.</li>
								Programacion y estadísticas con R 
								<li>Procesamiento de datos con Python </li>
								<li>Análisis de datos con Python</li>
							</ul>
						</p>
					<br>
					<h2>Precio</h2>
					<p>$5,500 MXN mensuales</p>
					<br>
					<h2>Duración</h2>
					<p>5 meses</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea</p>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="27" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.27" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.27">★</label><!--
									  --><input  id="radio2.27" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.27">★</label><!--
									  --><input  id="radio3.27" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.27">★</label><!--
									  --><input  id="radio4.27" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.27">★</label><!--
									  --><input  id="radio5.27" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.27">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://bedu.org/cursos/data-analysis/?utm_source=SEM&utm_medium=DataAnalysis&utm_campaign=cdmx_da&utm_source=adwords&utm_medium=ppc&utm_campaign=Leads+Data+Analysis&utm_term=curso%20analisis%20de%20datos&hsa_ver=3&hsa_mt=b&hsa_cam=9655535507&hsa_net=adwords&hsa_grp=102192179467&hsa_acc=3416616974&hsa_src=g&hsa_kw=curso%20analisis%20de%20datos&hsa_tgt=kwd-296484864906&hsa_ad=426499756226&gclid=CjwKCAjw7diEBhB-EiwAskVi16q-1VlgoQJ-OVMAJi_AGLik-UO-MODTU2CCxJFaQlbbg_5NMRnLyhoC7WIQAvD_BwE" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-28">
			<div class="popup">
				<div class="img-7"></div>
				<div class="text">
					<h1>Data Analytics</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(28);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">IMMUNE Technology Institute</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Aprende Data Analytics desde cero. Con este programa adquirirás los conocimientos necesarios para 
						dedicarte profesionalmente al análisis de datos. Comprenderás la lógica del lenguaje de programación 
						Python, manejarás terminales UNIX y las herramientas más populares para la visualización de datos.
					</p>
					<br>
					<h2>Contenido</h2>
						<p>
							<ol class="lista">
								<li>Python para data analytics</li>
								<li>Introduccion a la IA</li>
								<li>Manipulacion y procesado de datos</li>
								<li>Visualizacion de datos</li>
								<li>Preparación de Machine Learning</li>
								<li>Trabajo fin de programa: CAPSTONE PROJECT</li>
							</ol>
						</p>
					<br>
					<h2>Precio</h2>
					<p>$75,105.38 MXN</p>
					<br>
					<h2>Duración y horario</h2>
					<p>9 semanas Lunes a Viernes de 9:30 a 18:00</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.151302845623!2d-3.693811385104298!3d40.44978806155307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229189dbac4db%3A0x5400e56fb9abf5b1!2sIMMUNE%20Technology%20Institute!5e0!3m2!1ses-419!2smx!4v1622607991989!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="28" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.28" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.28">★</label><!--
									  --><input  id="radio2.28" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.28">★</label><!--
									  --><input  id="radio3.28" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.28">★</label><!--
									  --><input  id="radio4.28" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.28">★</label><!--
									  --><input  id="radio5.28" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.28">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>
					<button class="testbutton">
						<a href="https://immune.institute/data-analytics/" target="_blank">INSCRIBIRME</a>
						
					</button>	
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-29">
			<div class="popup">
				<div class="img-8"></div>
				<div class="text">
					<h1>Architectura de nube</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(29);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Bootcamp Institute</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Un Cloud Architect es un profesional con competencias en 10 áreas de conocimiento que son clave desempeñar el rol 
						de Arquitecto de Soluciones con una visión holística con base al Well Architected Framework combinando experiencia y 
						análisis a diversos escenarios con la finalidad de desarrollar un sentido crítico sobre cualquier tipo de arquitectura Cloud. <br>
						Este bootcamp es parte del modelo educativo MESH® que complementa diferentes dominios de conocimiento para maximizar tus resultados.					
					</p>
					<br>
					<h2>Duración</h2>
					<p>40 horas</p>
					<br>
					<h2>Próximas fechas</h2>
					<p>22 de Junio y 20 de Julio de 2021</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3372365222963!2d-99.17388188561846!3d19.39782974681925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6dbd8206fb%3A0x85504897333053ab!2sAv.%20Insurgentes%20Sur%20601%2C%20N%C3%A1poles%2C%20Benito%20Ju%C3%A1rez%2C%2003810%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622609326745!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="29" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.29" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.29">★</label><!--
									  --><input  id="radio2.29" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.29">★</label><!--
									  --><input  id="radio3.29" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.29">★</label><!--
									  --><input  id="radio4.29" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.29">★</label><!--
									  --><input  id="radio5.29" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.29">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://bootcamp.institute/bootcamp-cloud-architect-aws/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-30">
			<div class="popup">
				<div class="img-8"></div>
				<div class="text">
					<h1>Desarrolador de nube</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(30);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Bootcamp Iinstitute</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Un especialista en Desarrollo Cloud es un profesional con dominio en 10 áreas de conocimiento que le permiten al 
						estudiante desarrollar aplicaciones web full-stack de forma eficiente utilizando tecnologías de punta y servicios 
						especializados en Azure. <br>
						Se profundiza en el uso de tecnologías serverless avanzadas como bases de datos NoSQL y Machine Learning. Este 
						bootcamp es parte del modelo educativo MESH® que complementa diferentes dominios de conocimiento para maximizar 
						tus resultados.	<br>
						INSCRIPCIONES BAJO CUPO DISPONIBLE					
					</p>
					<br>
					<h2>Duración</h2>
					<p>40 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3372365222963!2d-99.17388188561846!3d19.39782974681925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6dbd8206fb%3A0x85504897333053ab!2sAv.%20Insurgentes%20Sur%20601%2C%20N%C3%A1poles%2C%20Benito%20Ju%C3%A1rez%2C%2003810%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622609608996!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="30" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.30" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.30">★</label><!--
									  --><input  id="radio2.30" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.30">★</label><!--
									  --><input  id="radio3.30" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.30">★</label><!--
									  --><input  id="radio4.30" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.30">★</label><!--
									  --><input  id="radio5.30" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.30">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://bootcamp.institute/cloud-developer-azure/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-31">
			<div class="popup">
				<div class="img-8"></div>
				<div class="text">
					<h1>Especialista de seguridad de nube</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(31);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Bootcamp Institute</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Un especialista en Seguridad Cloud es un profesional con dominio en 10 áreas de conocimiento que involucran la 
						protección de cargas de trabajo y ambientes en AWS involucrando un manejo avanzado de servicios en la prevención, 
						detección y corrección de amenazas utilizando las mejores prácticas de la industria en seguridad informática. <br>
						Este bootcamp es parte del modelo educativo MESH® que complementa diferentes dominios de conocimiento para maximizar 
						tus resultados. <br>
						Proveemos un contexto inmersivo en nuestro caso de negocio para diseñar escenarios completos que le permitan al 
						alumno proteger infraestructura y aplicaciones ante amenazas comunes de seguridad, aprenderá a aplicar soluciones 
						sofisticadas que permitan automatizar tareas para la detección, prevención y corrección de vulnerabilidades de acuerdo 
						al Well Architected Framework. <br>
						INSCRIPCIONES BAJO CUPO DISPONIBLE					
					</p>
					<br>
					<h2>Duración</h2>
					<p>40 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3372365222963!2d-99.17388188561846!3d19.39782974681925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6dbd8206fb%3A0x85504897333053ab!2sAv.%20Insurgentes%20Sur%20601%2C%20N%C3%A1poles%2C%20Benito%20Ju%C3%A1rez%2C%2003810%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622610145762!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="31" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.31" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.31">★</label><!--
									  --><input  id="radio2.31" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.31">★</label><!--
									  --><input  id="radio3.31" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.31">★</label><!--
									  --><input  id="radio4.31" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.31">★</label><!--
									  --><input  id="radio5.31" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.31">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://bootcamp.institute/security-specialist-aws/" target="_blank">INSCRIBIRME</a>
						
					</button>	
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-32">
			<div class="popup">
				<div class="img-8"></div>
				<div class="text">
					<h1>Ingenieria de nube</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(32);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Bootcamp Institute</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Un Cloud Engineer es un profesional con competencias en 10 áreas de conocimiento que son clave para ejecutar cualquier tipo de proyecto desde su diseño, migración y despliegue a gran escala. <br>
						Este bootcamp es parte del modelo educativo MESH® que complementa diferentes dominios de conocimiento para maximizar tus resultados. <br>
						Nuestros Cloud Engineers egresados cuentan con las habilidades para diseñar soluciones en Microsoft Azure desde cero tomando en consideración aspectos como la seguridad, escalabilidad, costo y eficiencia operativa con la nube de Azure.	<br>
						INSCRIPCIONES BAJO CUPO DISPONIBLE					
					</p>
					<br>
					<h2>Duración</h2>
					<p>40 horas</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3372365222963!2d-99.17388188561846!3d19.39782974681925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6dbd8206fb%3A0x85504897333053ab!2sAv.%20Insurgentes%20Sur%20601%2C%20N%C3%A1poles%2C%20Benito%20Ju%C3%A1rez%2C%2003810%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622610445274!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="32" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.32" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.32">★</label><!--
									  --><input  id="radio2.32" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.32">★</label><!--
									  --><input  id="radio3.32" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.32">★</label><!--
									  --><input  id="radio4.32" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.32">★</label><!--
									  --><input  id="radio5.32" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.32">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://bootcamp.institute/security-specialist-aws/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>

		<div class="ctnt" id="modal-33">
			<div class="popup">
				<div class="img-8"></div>
				<div class="text">
					<h1>Tecnologias aplicadas de nube</h1>
					<div class="calificacion-global">
					<?php
						// Mostrar las estrellas
						echo "Valoracion calculada con la calififación de los usuarios";
						echo $V->mostrar_estrellitas_para(33);
					?>
					</div>
					<br>
					<h2>Empresa/Organización que lo imparte</h2>
					<p class="tamano">Bootcamp Iinstitute</p>
					<br>
					<h2>Descripción del Bootcamp</h2>
					<p class="justificar">
						Un Ingeniero de Confiabilidad ó SRE es un especialista en las áreas de desarrollo y operaciones con un nivel de experiencia alto en tareas de automatización. Este perfil se especializa en 10 áreas de conocimiento que son clave para desempeñar este rol en la industria. <br>
						Este bootcamp es parte del modelo educativo MESH® que complementa diferentes dominios de conocimiento para maximizar tus resultados. <br>
						Tanto DevOps y SRE son un conjunto de prácticas y un cambio en la filosofía de las personas que la adoptan, este bootcamp comienza con un cambio a nivel de procesos y cultura empresarial interceptando la agilidad con el ámbito técnico. <br>
						Proveemos un contexto inmersivo en nuestro caso de negocio para diseñar escenarios completos de Integración y Despliegue Continuo (CI/CD) y tecnologías de orquestación a nivel de infraestructura, contenedores y aplicaciones serverless. Se abordan áreas transversales como DevSecOps y Testing en todos los niveles.				
					</p>
					<br>
					<h2>Duración</h2>
					<p>40 horas</p>
					<br>
					<h2>Próximas fechas</h2>
					<p>22 de junio de 2021</p>
					<br>
					<h2>Modalidad</h2>
					<p>En línea y presencial</p>
					<br>
					<h2>Ubicación</h2>
					<br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3372365222963!2d-99.17388188561846!3d19.39782974681925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6dbd8206fb%3A0x85504897333053ab!2sAv.%20Insurgentes%20Sur%20601%2C%20N%C3%A1poles%2C%20Benito%20Ju%C3%A1rez%2C%2003810%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622610928037!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					<br><br>
					<div class="val_votacion">
						<form action="php/agregar_calificacion.php" method="POST">
							<h3>Tu opinion cuenta, dejamos tu valoración para este bootcamp</h3>
							<input type="text" value="33" name="id" class="info1">
							<input type="text" value="Arduino y Algunas Aplicaciones" name="boot" class="info1"> 
							<div class="user_info">
								<label for="names">
									<p class="clasificacion">
									     <input  id="radio1.33" type="radio" name="estrellas" value="5"><!--
									  --><label for="radio1.33">★</label><!--
									  --><input  id="radio2.33" type="radio" name="estrellas" value="4"><!--
									  --><label for="radio2.33">★</label><!--
									  --><input  id="radio3.33" type="radio" name="estrellas" value="3"><!--
									  --><label for="radio3.33">★</label><!--
									  --><input  id="radio4.33" type="radio" name="estrellas" value="2"><!--
									  --><label for="radio4.33">★</label><!--
									  --><input  id="radio5.33" type="radio" name="estrellas" value="1"><!--
									  --><label for="radio5.33">★</label>
									</p>
								</label>
							</div>
							<br>
							<button>ENVIAR CALIFICACION</button>
							<BR></BR>
						</form>
					</div>	
					<button class="testbutton">
						<a href="https://bootcamp.institute/bootcamp-cloud-sre-aws/" target="_blank">INSCRIBIRME</a>
						
					</button>
					<br><br>
					
	
				</div>
				<a href="#" class="btn-cerrar-popup"> x</a>
			</div>
		</div>
		

		<h1>Escoge una Categoria</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#Programacion" class="category_item" category="Programacion">Programacion</a>
				<a href="#Arduino" class="category_item" category="Arduino">Arduino</a>
				<a href="#Diseno" class="category_item" category="Diseno">Diseño/Animación</a>
				<a href="#DiseWeb" class="category_item" category="DiseWeb">Diseño Web</a>
				<a href="#Seguridad" class="category_item" category="Seguridad">CiberSeguridad</a>
				<a href="#InteArti" class="category_item" category="InteArti">Inteligencia Artificial</a>
				<a href="#Analist" class="category_item" category="Analist">Analista de Datos</a>
				<a href="#Nube" class="category_item" category="Nube">Servicios de la Nube</a>
				<div class="BTN-REG">
					<a href="index.php" class="category_item" id ="regreso" category="Regreso">Regresar al Inicio</a>
				</div>
				
			</div>
			<section class="products-list">
				<!--ARDUINO-->
				
				<div class="product-item" category="Arduino">
					<img src="img/images/Arduino y algunas aplicaciones.png" alt="" width="95%" height="95%">
					<a href="#modal-1">Arduino y Algunas Aplicaciones</a>
				</div>

				<div class="product-item" category="Arduino">
					<img src="img/images/Master & Maker. Realiza proyectos con Arduino. De 0 a Maker!.png" alt="" width="95%" height="95%">
					<a href="#modal-2">Master & Maker. Realiza proyectos con Arduino. De 0 a Maker!</a>
				</div>

				<div class="product-item" category="Arduino">
					<img src="img/images/My Robotic Friends.png" alt="" width="95%" height="95%">
					<a href="#modal-3">My Robotic Friends</a>
				</div>

				<div class="product-item" category="Arduino">
					<img src="img/images/Robótica.png" alt="" width="95%" height="95%">
					<a href="#modal-4">Robótica</a>
				</div>

				<!--PROGRAMACIÓN-->
				<div class="product-item" category="Programacion" >
					<img src="img/images/progra1.png" alt="" width="95%" height="95%">
					<a href="#modal-5">Programación Web</a>
				</div>
				<div class="product-item" category="Programacion" >
					<img src="img/images/MATLAB.jpg" alt="" width="95%" height="197.5px" >
					<a href="#modal-6">MATLAB</a>
				</div>
				<div class="product-item" category="Programacion" >
					<img src="img/images/c.png" alt="" width="95%" height="95%" >
					<a href="#modal-7">C</a>
				</div>
				<div class="product-item" category="Programacion" >
					<img src="img/images/java.png" alt="" width="95%" height="95%" >
					<a href="#modal-8">Java</a>
				</div>
				<div class="product-item" category="Programacion" >
					<img src="img/images/phyton.jpg" alt="" width="95%" height="95%" >
					<a href="#modal-9">Phyton</a>
				</div>

				<!--DISEÑO/ANIMACIÓN-->
				<div class="product-item" category="Diseno">
					<img src="img/images/illustrator.jpg" alt="" width="95%" height="95%">
					<a href="#modal-10">Adobe illustrator</a>
				</div>
				<div class="product-item" category="Diseno">
					<img src="img/images/adobe.jpg" alt="" width="95%" height="95%">
					<a href="#modal-11">Adobe Photoshop</a>
				</div>
				<div class="product-item" category="Diseno">
					<img src="img/images/filmora.jpg" alt="" width="95%" height="95%">
					<a href="#modal-12">Filmora Premiere</a>
				</div>

				<!--DISEÑO WEB-->
				<div class="product-item" category="DiseWeb" >
					<img src="img/images/Backend.png" alt="" width="95%" height="95%" >
					<a href="#modal-13">Backend</a>
				</div>
				<div class="product-item" category="DiseWeb" >
					<img src="img/images/Fontend.png" alt="" width="95%" height="95%" >
					<a href="#modal-14">Frontend</a>
				</div>
				<div class="product-item" category="DiseWeb" >
					<img src="img/images/FullStack Madrid.png" alt="" width="95%" height="95%" >
					<a href="#modal-15">Full Stack Madrid</a>
				</div>
				<div class="product-item" category="DiseWeb" >
					<img src="img/images/FullStack.png" alt="" width="95%" height="95%" >
					<a href="#modal-16">FullStack</a>
				</div>
				<div class="product-item" category="DiseWeb" >
					<img src="img/images/UX-UI.png" alt="" width="95%" height="95%" >
					<a href="#modal-17">UX-UI</a>
				</div>
				
				<!--CIBERSEGURIDAD-->
				<div class="product-item" category="Seguridad" >
					<img src="img/images/Bootcamp intensivo de Ciberseguridad.png" alt="" width="95%" height="95%" >
					<a href="#modal-18">Bootcamp intensivo de Ciberseguridad</a>
				</div>
				<div class="product-item" category="Seguridad" >
					<img src="img/images/Bootcamp Online Ciberseguridad.png" alt="" width="95%" height="95%" >
					<a href="#modal-19">Bootcamp Online Ciberseguridad</a>
				</div>
				<div class="product-item" category="Seguridad" >
					<img src="img/images/Cibersecurity Bootcamp.png" alt="" width="95%" height="95%" >
					<a href="#modal-20">Cibersecurity Bootcamp</a>
				</div>
				<div class="product-item" category="Seguridad" >
					<img src="img/images/Ciberseguridad 360.png" alt="" width="95%" height="95%" >
					<a href="#modal-21">Cibersecurity Bootcamp</a>
				</div>
				<div class="product-item" category="Seguridad" >
					<img src="img/images/Fullstack Cibersecurity Bootcamp.png" alt="" width="95%" height="95%" >
					<a href="#modal-22">Fullstack Cibersecurity Bootcamp</a>
				</div>
			
				<!--INTELIGENCIA ARTIFICIAL-->
				<div class="product-item" category="InteArti" >
					<img src="img/images/IA_1.png" alt="" width="95%" height="95%" >
					<a href="#modal-23">Inteligencia Artificial en línea</a>
				</div>
				
				<div class="product-item" category="InteArti" >
					<img src="img/images/IA_2.png" alt="" width="95%" height="95%" >
					<a href="#modal-24">Diplomado en nteligencia Artificial</a>
				</div>
				<div class="product-item" category="InteArti" >
					<img src="img/images/inteligencia.jpg" alt="" width="95%" height="95%" >
					<a href="#modal-25">Inteligencia Artificial</a>
				</div>

				<!--ANALISTA DE DATOS-->
				<div class="product-item" category="Analist" >
					<img src="img/images/analista.jpg" alt="" width="95%" height="95%" >
					<a href="#modal-26">Data analytics bootcamp</a>
					
				</div>
				<div class="product-item" category="Analist" >
					<img src="img/images/Data_analytics_2.png" alt="" width="95%" height="95%" >
					<a href="#modal-27">Data Analysis</a>
				</div>
				<div class="product-item" category="Analist" >
					<img src="img/images/Data_analytics_3.png" alt="" width="95%" height="95%" >
					<a href="#modal-28">Data Analytics</a>
				</div>

				<!--SERVICIOS DE LA NUBE-->
				<div class="product-item" category="Nube" >
					<img src="img/images/Architectura de nube.png" alt="" width="95%" height="95%" >
					<a href="#modal-29">Arquitecto de Nube AWS</a>
				</div>
				<div class="product-item" category="Nube" >
					<img src="img/images/Desarrolador de nube.png" alt="" width="95%" height="95%" >
					<a href="#modal-30">Desarrollador de Nube AZURE</a>
				</div>
				<div class="product-item" category="Nube" >
					<img src="img/images/Especialista de seguridad de nube.png" alt="" width="95%" height="95%" >
					<a href="#modal-31">Especialista de Seguridad AWS</a>
				</div>
				<div class="product-item" category="Nube" >
					<img src="img/images/Ingenieria de nube.png" alt="" width="95%" height="95%" >
					<a href="#modal-32">Ingenieria de Nube AZURE</a>
				</div>
				
				<div class="product-item" category="Nube" >
					<img src="img/images/Tecnologias aplicadas de nube.png" alt="" width="95%" height="95%" >
					<a href="#modal-33">Tecnologias aplicadas de nube</a>
				</div>
				
			</section>
			
		</div>
		
	</div>

</body>
</html>