<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL=StyleSheet HREF="css/style.css" TYPE="text/css">
    <script src="https://kit.fontawesome.com/b7f4116b45.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="head"> 

        <div class="w">
            <a style="font-size: 13px; color: #ffffff; letter-spacing: 2px; text-align: center;
                font-family: Helvetica;">
            <p>WEBINAR</p></a>
            
        </div>

        <div class="tt">
        
        <a style="font-family: 'Oswald', sans-serif;
                font-size: 40px; color: #02363D;text-align: center;line-height: 52px;">
                <p>El reto de humanizar el CX financiero del 2021</p></a>
        
        <a style="font-family: 'Oswald', sans-serif;
                font-size: 40px;color: #02363D;text-align: center;line-height: 52px;">
                <p>La experiencia de un Unicornio de Latam</p></a>
            
            
            <a style="font-family: 'Oswald', sans-serif;
                font-size: 21px; color: #00373E; text-align: center; line-height: 40px;">
            <p>MIÉRCOLES 16 DE DICIEMBRE|17 HS(HORARIO DE QUITO)</p> </a>  
        <!--encabezado-->
        </div>
    </header>
    <a style="margin-left: 380px;">
            <img src="imagenes/Group 5.jpg">
    </a> 
    <?php include("conectar.php"); 
        $sql = "SELECT * from datos";
        $result=mysqli_query($conex,$sql);
        
    ?> 
        <div class="contenedor-tabla">
            <table>
            <thead class="titulo-tabla">
            <tr><th>Nombre</th><th>Apellido</th><th>Correo electrónico</th><th>País</th><th>Teléfono</th><th>Puesto</th></tr>
            <thead><?php while($mostrar=mysqli_fetch_array($result)){?>
                    <tr>
                        <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['apellido'] ?></td>
                            <td><?php echo $mostrar['correo'] ?></td>
                            <td><?php echo $mostrar['pais'] ?></td>
                            <td><?php echo $mostrar['telefono'] ?></td>
                            <td><?php echo $mostrar['puesto'] ?></td>
                    </tr>  
                <?php
                    }
                ?>
            </table>
        </div>
        <div class="boton-espectador"> 
        <input class="boton" type="submit" value="Inscribir un espectador"  onclick="location.href='index.php';">
        </div>
        <div class="div-footer">
        <footer>

            <div class="iconos-footer">
                <a href="#" class="boton-twitter">
                    <i class="fab fa-twitter"></i></a>
                <a href="#" class="boton-facebook">
                    <i class="fab fa-facebook"></i></a>
                <a href="#" class="boton-link">
                    <i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="boton-youtube">
                    <i class="fab fa-youtube"></i></a>
                <a href="#"class="boton-insta" >
                    <i class="fab fa-instagram"></i></a>
                <a href="#" class="boton-snap">
                    <i class="fab fa-snapchat"></i></a>
                    
            </div>
            <div class="tiempo">
                <a style="font-size: 18px;color: #405457;width:60px ;height:20px; ">
                    <p>©  2021</p></a>
            </div>
            
            <hr style="border-color: #ECF1F1 ; margin: 50px 100px 0px 100px;">
        </footer>
    </div>
    
    
    































</body>
</html>