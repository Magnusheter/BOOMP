

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="stylesheet" href="css/styles_perfil.css">
  <title>Perfil</title>
</head>
<body>

  <div class="container">
    <div class="bubbles"></div>  <!--Portada-->
  
    <div class="photo">
      <img src="img/usuario.jpg" alt="" width="100%" height="100%">
    </div>


    <!-- Llamado a la BD para mostrar la hoja de vida -->
    <?php
    session_start();
      include 'php/conexion_be.php';
      
      $o_nombre=$_SESSION['usuario'];
  //  $info_perfil = mysqli_query($conexion, "SELECT * FROM user_Data INNER JOIN usuario on user_Data.nombre=usuarios.usu_nombre WHERE usuarios.usu_correo = '$o_nombre'");
      $info_perfil = mysqli_query($conexion, "SELECT * FROM user_data INNER JOIN usuarios on user_data.nombre = usuarios.usu_nombre WHERE usuarios.usu_correo = '$o_nombre'");
      
      $info_perfil_usu = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usu_correo = '$o_nombre'");
      
      

      // echo $o_nombre;

      // if($info_perfil)
      // {
      //     echo"Conculta exitosa";
          
      //     echo $estado_o;
      // }
      // else{
      //     echo"Añlgo salio mal";
      // }



      $valores = mysqli_fetch_array($info_perfil);
      $valores_usu = mysqli_fetch_array($info_perfil_usu);
      $nombre = $valores['nombre'];
      $app = $valores['apellido_P'];
      $apm = $valores['apellido_M'];
      $correo = $valores_usu['usu_correo'];
      $genero = $valores['genero'];
      $edad = $valores['edad'];
      $calle = $valores['calle'];
      $colonia = $valores['colonia'];
      $nint = $valores['numero_int'];
      $next = $valores['numero_ext'];
      $estado = $valores['estado'];
      $municipio = $valores['municipio'];
      $cp = $valores['codigo_Postal'];
      $nivel = $valores['nivel_Estudios'];
      $carrera = $valores['carrera_A'];
      $institucion = $valores['institucion'];

    ?>
    <form action="php/da_perfil.php">
    <header>  <!--Caja Superior--> 
        <div>
          <a class="bt-reg" href="index.php">Inicio</a>
        </div>
        <span class="form-group"><div class="quantity"><input type="text" name="pe_nombre"><span class="barra"></span></div></span>
        <div class="form-group-1">
          <?php echo $nombre." ".$app." ".$apm;?>
        </div>
    </header>                                <!--Caja Superior FIN-->
  
    <div class="statscontainer">   <!----------- Caja inf ------------------>
      <div class="statistics">
        <div class="quantity"><input type="text" name="tomados"><span class="barra"></span></div>
        <div class="units">Cursos tomados</div>
      </div>
    
      <div class="statistics">
        <div class="quantity"><input type="text" name="actuales"><span class="barra"></span></div>
        <div class="units">Cursos Actuales</div>
      </div>
    
      <div class="statistics">
        <div class="quantity"><input type="text" name="tomar"><span class="barra"></span></div>
        <div class="units">Cursos por tomar</div>
      </div>
    </div>   <!-----------------------------Caja inf FIN------------------------------>


    <div class="statscontainer2"> <!--3ra caja, datos personales--> 
    Correo : <?php echo $correo;?>
      <div class="form-group">  <input type="text" name="correo"><span class="barra"></span> </div>
    </div>  
    <div class="statscontainer2"> <!--3ra caja, datos personales--> 
    Genero :   <?php echo $genero;?>
      <div class="form-group"> <input type="text" name="genero"><span class="barra"></span></div>
    </div>
    <div class="statscontainer2"> <!--3ra caja, datos personales--> 
      Edad :  <?php echo $edad;?>
      <div class="form-group"> <input type="text" name="edad"><span class="barra"></span></div>
    </div>

    <div class="statscontainerrr">      <!--APARTADO DIRECCIÓN-->    
      <div class="form-group"> DIRECCIÓN </div>
    </div>
        
    <div class="statscontainer2"> 
      Calle :  <?php echo $calle;?>
      <div class="form-group"> <input type="text" name="calle"><span class="barra"></span></div>
    </div>
    
    <div class="statscontainer2"> 
      Colonia : <?php echo $colonia;?>
      <div class="form-group"> <input type="text" name="colonia"><span class="barra"></span></div>
    </div>

    <div class="statscontainer2"> 
      Numero int. : <?php echo $nint;?>
      <div class="form-group"> <input type="text" name="correo"><span class="NumInt"></span></div>
    </div>

    <div class="statscontainer2"> 
      Numero ext. : <?php echo $next;?>
      <div class="form-group"> <input type="text" name="NumExt"><span class="barra"></span></div>
    </div>

    <div class="statscontainer2"> 
      Estado :  <?php echo $estado;?>
      <div class="form-group"> <input type="text" name="estado"><span class="barra"></span></div>
    </div>

    <div class="statscontainer2"> 
      Municipio :  <?php echo $municipio;?>
      <div class="form-group"> <input type="text" name="municipio"><span class="barra"></span></div>
    </div>

    <div class="statscontainer2"> 
      Código Postal :  <?php echo $cp;?>
      <div class="form-group"> <input type="text" name="CodPost"><span class="barra"></span></div>
    </div>

    <div class="statscontainerrr">      <!--APARTADO ESTUDIOS-->    
      <div class="form-group"> ESTUDIOS </div>
    </div>

    <div class="statscontainer2"> 
      Nivel de estudios :  <?php echo $nivel;?>
      <div class="form-group"> <input type="text" name="estudios"><span class="barra"></span> </div>
    </div>

    <div class="statscontainer2"> 
      Carrera :  <?php echo $carrera;?>
      <div class="form-group"> <input type="text" name="carrera"><span class="barra"></span> </div>
    </div>

    <div class="statscontainer2"> 
      Institución :  <?php echo $institucion;?>
      <div class="form-group"> <input type="text" name="instituto"><span class="barra"></span> </div>
    </div>
  </form>
  </div>
      
  <div class="botones_perfil">
    <a href="">Modificar Informacion</a>
    <a href="">Calificar Bootcamp</a>
    <a href="php/cerrar_sesion.php" class="CS">Cerrar Sesion</a>
  </div>

  <div class="attribution">
    Bootcamp: 
    Coded by Equipo Simuladores <br>
    <br>
    </a>.
  </div>
</body>
</html>
