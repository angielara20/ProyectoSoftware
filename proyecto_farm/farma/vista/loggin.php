<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loggin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
</head>
<?php
session_start();
if(!empty($_SESSION['us_tipo'])){
    header('Location:../controlador/loggincontroller.php');
}
else{
    session_destroy();


?>


<body>
    <img class="wave" src="../imagenes/rn.jpg" alt="">
    <div class="contenedor">
        <div class="img">
            <img src="../imagenes/undraw_doctors_hwty.svg" alt="">
           </div>
            <div class="contenido_loggin">               
                <form action="../controlador/loggincontroller.php" method="post">
                    <img src="../imagenes/medical-29_icon-icons.com_73943.png" alt="">
                   
                    <h2>FARMACIA</h2>
                    <div class="input-div dni">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>DNI</h5>
                            <input type="text" name="user" class="input">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>CONTRASEÑA</h5>
                            <input type="password" name="pass" class="input">
                     </div>  
                    </div>
                    <a href="">create warpiece</a>
                    <input type="submit" class="btm" value="INICIAR SESION">
                </form>

            
        </div>
    </div>

</body>

</html>
<?php
}
?>