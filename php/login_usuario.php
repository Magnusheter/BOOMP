<?php

    session_start();

    include 'conexion_be.php';

    $lo_correo = $_POST['lo_correo'];
    $lo_contra = $_POST['lo_contra'];

    $val_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usu_correo = '$lo_correo' and usu_contra='$lo_contra'");

    echo"$lo_correo,$lo_contra";

    if(mysqli_num_rows($val_login) > 0)
    {
        //$_SESSION['us_correo']=$lo_correo;
        header("location:../perfil.html");
        exit;
    }
    else
    {
        echo'
            <script>
                alert("Usuario no existe, verifique los datos");
                window.location = "../login.html";
            </script>
        ';
        exit;
    }

?>