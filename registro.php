<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon(1).PNG" type="image/x-icon">
    <link  href="css/estiloslogin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <title>Registro</title>
    <script>
       function mostrarContrasena(){
      var tipo = document.getElementById("password");
      var tipos = document.getElementById("conpassword");
      if(tipo.type == "password" && tipos.type == "password"){
          tipo.type = "text";
          tipos.type = "text";
      }else{
          tipo.type = "password";
          tipos.type = "password";
      }
       }
       
    </script>
    
    
</head>
<body>

        <div id="main-div-r">
          <div class="container">
            <div class="child">
                <a href="login.php"><img src="img/LOGO V4.PNG"  alt="Inicio" class="logo"></a>
                <h1>REGISTRO</h1>

            <form action="php/registro_usuario.php" class="formulario_registro" method="POST">
                <div class="form-group">
                    <input type="text" name="usuario"><span class="barra"></span>
                    <label for="usuario">Usuario</label>
                </div>
                <div class="form-group">
                  <input type="text" name="nombre"><span class="barra"></span>
                  <label for="nombre" style="margin-top: 20px;">Nombre</label>
              </div>
                <div class="form-group">
                    <input type="email" name="correo"><span class="barra"></span>
                    <label for="correo" style="margin-top: 20px;">Correo</label>
                </div>
                <div class="form-group">
                    <input type="password" name="contra" id="password"><span class="barra"></span>
                    <label for="password" style="margin-top: 20px;">Contraseña</label>
                </div>
                <div class="form-group">
                    <input type="password" name="confcontra" id="conpassword"><span class="barra"></span>
                    <label for="password" style="margin-top: 20px;">Confirmar contraseña</label>
                </div>
                
                <button class="btn-dark" type="button" onclick="mostrarContrasena()">Mostrar contraseña</button>
                
                <div class="Registro">
                  <br>
                  <button class="btn-dark">Completar</button>
                  
                </div>
                
            </form>
            </div>
          </div>
        </div>
      </body>  

</html>