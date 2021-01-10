<?php
require ("conectar.php");

     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $email = $_POST['email'];
     $pais = $_POST['pais'];
     $telefono = $_POST['telefono'];
     $puesto = $_POST['puesto'];
    
     $consulta = "INSERT INTO datos ( nombre, apellido, correo, pais, telefono, puesto)
            VALUES ('$nombre','$apellido','$email','$pais','$telefono','$puesto')";
        $resultado = mysqli_query($conex,$consulta);

    
        

