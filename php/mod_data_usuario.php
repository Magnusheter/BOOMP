<?php
    include 'conexion_be.php';

    echo " ".$da_nombre =$_POST['da_nombre']."-";
    echo " ".$da_app =$_POST['da_app']."-";
    echo " ".$da_apm =$_POST['da_apm']."-";
    echo " ".$da_genero =$_POST['da_genero']."-";
    echo " ".$da_edad =$_POST['da_edad']."-";
    echo " ".$da_calle =$_POST['da_calle']."-";
    echo " ".$da_ni =$_POST['da_ni']."-";
    echo " ".$da_ne =$_POST['da_ne']."-";
    echo " ".$da_colonia =$_POST['da_colonia']."-";
    echo " ".$da_estado =$_POST['da_estado']."-";
    echo " ".$da_municipio =$_POST['da_municipio']."-";
    echo " ".$da_cp =$_POST['da_cp']."-";
    echo " ".$da_nivel =$_POST['da_nivel']."-";
    echo " ".$da_carrera =$_POST['da_carrera']."-";
    echo " ".$da_escuela =$_POST['da_escuela']."-";

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

            echo " ".$destino;
            //move_uploaded_file($tmp_name, $destino);
        }
        // else
        // {
        //     echo'
        //         <script>
        //             alert("Error al cargar el tipo de archivo, verifique que sea, gif,jpeg,jpg,png");
        //         </script>
        //         window.location= "../personalinf.php"
        //     ';
            
        // }
    //     $query = "UPDATE user_Data SET
    //                             apellido_P='$da_app',
    //                             apellido_M='$da_apm',
    //                             genero='$da_genero',
    //                             edad='$da_edad',
    //                             calle='$da_calle',
    //                             numero_int='$da_ni',
    //                             numero_ext='$da_ne',
    //                             colonia='$da_colonia',
    //                             estado='$da_estado',
    //                             municipio='$da_municipio',
    //                             codigo_Postal='$da_cp',
    //                             nivel_Estudios='$da_nivel',
    //                             carrera_A='$da_carrera',
    //                             institucion='$da_escuela',
    //                             foto='$destino'
    //                             WHERE
    //                             nombre='$nombre'";

    // $modificar = mysqli_query($conexion, $query);
?>