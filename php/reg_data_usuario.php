

<?php
    
    
    include 'conexion_be.php';

    $da_nombre =$_POST['da_nombre'];
    $da_app =$_POST['da_app'];
    $da_apm =$_POST['da_apm'];
    $da_genero =$_POST['da_genero'];
    $da_edad =$_POST['da_edad'];
    $da_calle =$_POST['da_calle'];
    $da_ni =$_POST['da_ni'];
    $da_ne =$_POST['da_ne'];
    $da_colonia =$_POST['da_colonia'];
    $da_estado =$_POST['da_estado'];
    $da_municipio =$_POST['da_municipio'];
    $da_cp =$_POST['da_cp'];
    $da_nivel =$_POST['da_nivel'];
    $da_carrera =$_POST['da_carrera'];
    $da_escuela =$_POST['da_escuela'];

    //Variable para enviar fotografia
    $foto = $_FILES['da_foto'];
    $tmp_name = $foto['tmp_name'];
    $directorio_destino = "perfiles";
        $img_file = $foto['name'];
        $img_type = $foto['type'];

        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
                strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
            $destino = $directorio_destino . '/' .  $img_file;
            move_uploaded_file($tmp_name, $destino);
        }
        else
        {
            echo'
                <script>
                    alert("Error al cargar el tipo de archivo, verifique que sea, gif,jpeg,jpg,png");
                </script>
                window.location= "../personalinf.php"
            ';
            
        }
        $query = "INSERT INTO   user_Data(
                                nombre,
                                apellido_P,
                                apellido_M,
                                genero,
                                edad,
                                calle,
                                numero_int,
                                numero_ext,
                                colonia,
                                estado,
                                municipio,
                                codigo_Postal,
                                nivel_Estudios,
                                carrera_A,
                                institucion,
                                foto)

                        VALUES( '$da_nombre',
                                '$da_app',
                                '$da_apm',
                                '$da_genero',
                                '$da_edad',
                                '$da_calle',
                                '$da_ni',
                                '$da_ne',
                                '$da_colonia',
                                '$da_estado',
                                '$da_municipio',
                                '$da_cp',
                                '$da_nivel',
                                '$da_carrera',
                                '$da_escuela',
                                '$destino')";

    $guardar = mysqli_query($conexion, $query);
    
    //echo"$da_nombre,$da_app,$da_apm,$da_genero,$da_edad,$da_calle,$da_ni,$da_ne,$da_colonia,$da_estado,$da_municipio,$da_cp,$da_nivel,$da_carrera,$da_escuela";

//     if($conexion)
// {
//     echo'Conectado exitosamente a la base';
// }
// else{
//     echo 'No se ha podido conectar';
// }



    if($guardar)
    {   
        echo'<script type="text/javascript">
        alert("Usuario registrado de manero exitosa");
        window.location.href="../login.php";
        </script>';
    }
    else{
        echo '"Error al ingresar los datos";
        ';
    }


?>