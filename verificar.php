<?php
include ("conectar.php");
if (isset($_POST['inscribir'])){


    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1 &&
    strlen($_POST['email']) >=1 && strlen($_POST['pais']) >=1 &&
    strlen($_POST['telefono']) >=1 && strlen($_POST['puesto']) >=1){

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $pais = trim($_POST['pais']);
        $telefono = trim($_POST['telefono']);
        $puesto = trim($_POST['puesto']);
       
        $consulta = "INSERT INTO datos ( nombre, apellido, correo, pais, telefono, puesto)
               VALUES ('$nombre','$apellido','$email','$pais','$telefono','$puesto')";
           $resultado = mysqli_query($conex,$consulta);
   }

    }
    
?>