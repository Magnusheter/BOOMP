<?php
    session_start();
    if(!isset($_SESSION['usuario']))
    {
        echo'
            <script>
            alert("Porfavor debes iniciar sesión");
            window.location="../login.php";
            </script>
        ';
        session_destroy();
        
    }
    else
    {
        echo'
            <script>
            window.location="../perfil.php";
            </script>
        ';
    }

?>