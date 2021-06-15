<?php
   
    include 'conexion_be.php';
    $o_nombre="coconauta";
    $info_perfil = mysqli_query($conexion, "SELECT estado FROM user_Data WHERE nombre = '$o_nombre'");
    echo $o_nombre;

    // if($info_perfil)
    // {
    //     echo"Conculta exitosa";
        
    //     echo $estado_o;
    // }
    // else{
    //     echo"Añlgo salio mal";
    // }

    $valores = mysqli_fetch_array($info_perfil);
    $estado_o = $valores['estado'];


?>