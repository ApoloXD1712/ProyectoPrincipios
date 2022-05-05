<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include 'conexion_BD.php';

    $correo = $_POST['Correo']; 
    $contrasena = $_POST['Contrasena'];
    $contrasena = hash('sha512',$contrasena);

    $validar_login = mysqli_query($conexion,"SELECT * FROM usuario WHERE Correo='$correo' and Contrasena='$contrasena'");
    $_SESSION['usuario'] = $correo;
    
    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo;
        header("location: /pagina.php");
        exit();
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../pagina.php";     
            </script>
        ';
        exit();
    }
?>