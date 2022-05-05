<?php

    include 'conexion_BD.php';

    $nombre_completo = $_POST['nombre']; 
    $correo_electronico = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];
    $contraseña = hash('sha512',$contraseña);
 
    $query ="INSERT INTO usuario(Nombre,Correo,Usuario,Contrasena) VALUES('$nombre_completo','$correo_electronico','$usuario','$contraseña')";

    //Verificar que correo no se repita en BD
    $verificarCorreo = mysqli_query($conexion,"SELECT * FROM usuario WHERE Correo='$correo_electronico' ");
    $verificarUsuario = mysqli_query($conexion,"SELECT * FROM usuario WHERE Usuario='$usuario' ");
    if(mysqli_num_rows($verificarCorreo)>0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro");
                window.location = "./index.php";
            </script>
        '; 
        
        exit();
    }else if(mysqli_num_rows($verificarUsuario)>0){
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro");
                window.location = "./index.php";
            </script>
        ';
        exit();
    }else{
        echo '
            <script>
                
                window.location = "./index.php";
            </script>
        ';
    }




    //Almacenar
    $ejecutar = mysqli_query($conexion,$query);

    

?>