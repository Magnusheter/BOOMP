<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicons/favicon-32x32.png" type="image/x-icon">
    <title>Registro | Datos Personales </title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilospersonalinf.css">
    <script type="text/javascript" src="main.js"></script>
</head>
<body>
    <form action="php/reg_data_usuario.php" id="form" method="POST">
        <div class="form">
            <div>
                <div class="logo-div">
                    <a href="login.php"><img src="img/LOGO V4.PNG"  alt="Inicio" class="logo"></a>

                </div>
                <h1><br>Datos Personales</h1>
            </div>
            <div class="grupo">
                <h2>Foto de perfil</h2>
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" height="200" alt="img" class="avatar">
                <input type="file" onchange="previewFile()" class="button" id="insertar"><br>
            </div>
            <div class="grupo">
                <input type="text" id="name" name="da_nombre" required placeholder="Nombre"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="lastname" name="da_app" required placeholder="Apellido Paterno"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="lastname" name="da_apm" required placeholder="Apellido Materno"><span class="barra"></span>
            </div>
            <div class="lista">
                <h2>Género</h2>
                <br>
                <select name="da_genero">
                    <option selected="true" disabled="disabled">Seleccione su género</option>
                    <option value="hombre" required class="seleccion">Hombre</option>
                    <option value="mujer" required class="seleccion">Mujer</option>
                </select>
            </div>
            <div class="grupo"><h2>Edad</h2></div>
            <div class="grupo">
                <input type="range" name="da_edad" value="15" min="15" max="81" oninput="this.nextElementSibling.value = this.value">
                <output>15</output>
            </div>
            <div class="grupo"><h2>Dirección</h2></div>
            <div class="grupo">
                <input type="text" name="da_calle" id="calle" required placeholder="Calle"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="numeroint" name="da_ni" placeholder="Número Interno"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="numeroext" name="da_ne" required placeholder="Número Externo"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="colonia" name="da_colonia" required placeholder="Colonia"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="estado" name="da_estado" required placeholder="Estado"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="municipio" name="da_municipio" required placeholder="Municipio"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" id="cp" name="da_cp" required placeholder="Código Postal"><span class="barra"></span>
            </div>
            <div class="lista">
                <h2>Nivel de Estudios</h2>
                <br>
                <select name="da_nivel">
                    <option selected="true"  disabled="disabled">Seleccione su nivel máximo de estudios</option>
                    <option value="Media Superior" required>Media Superior</option>
                    <option value="Superior" required>Superior</option>
                    <option value="Egresado" required>Egresado</option>
                </select>
            </div>
            <div class="lista">
                <h2>Carrera</h2>
                <br>
                <select name="da_carrera">
                    <option selected="true"  disabled="disabled">Seleccione su carrera</option>
                    <option value="Tronco Comun" required>Tronco Común</option>
                    <option value="Sistemas" required>Ingenieria en Sistemas Computacionales</option>
                    <option value="Telecomunicaciones" required>Ingenieria en Telecomunicaciones</option>
                    <option value="Telematica" required>Ingenieria Telematica</option>
                    <option value="Mecatronica" required>Ingenieria Mecatronica</option>
                    <option value="Software" required>Ingenieria en Software</option>
                    <option value="Otra" required>Otra</option>
                </select>
            </div>
            <div class="grupo"><h2>Institución</h2></div>
            <div class="grupo">
                <input type="text" name="da_escuela" id="escuela" required placeholder="Nombre de tu institución o última institución (en caso de ser egresado"><span class="barra"></span>
            </div>
            
            <button type="submit">Enviar</button>
        </div>
    </form>
    <script src="main.js"></script>
</body>
</html>
