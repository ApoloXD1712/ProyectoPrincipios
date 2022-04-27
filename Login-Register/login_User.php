<?php

    session_start();
    include 'conexion_BD.php';

    $correo = $_POST['Correo']; 
    $contrasena = $_POST['Contrasena'];

    

    $validar_login = mysqli_query($conexion,"SELECT * FROM usuario WHERE Correo='$correo' and Contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo;
        header("location: ./pagina.php");
        exit();
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../Pagina/pagina.php";     
            </scrip>
        ';
        exit();
    }



?>