<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <a href="./index.html">
        <button type="submit" title="Regresar al Inicio" class="button-2">Home</button>
        </a>

        <div class="div-1">
        <div>
            <div>
              <form method="GET" action="login.php">
                    <p style="font-family:Garamond;" class="form">Usuario</p>
                    <input type="text" name="user" placeholder="username" required class="in">
                    <p style="font-family:Garamond;" class="form">Password</p>
                    <input type="password" name="pass" placeholder="Password" required class="in">
                    <br>
                    <br>
                    <br>
                    <button type="submit" name="button" class="button-1">INGRESAR</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php
    require_once "./db/conexion.php";

    if(isset($_GET["button"])==1)
    {
        $user=$_GET['user'];
        $pass=$_GET['pass'];

        $ver= "SELECT * FROM usuarios WHERE user='$user' and pass='$pass' ";
        $resultado= mysqli_query($db, $ver);
        $verfilas= mysqli_num_rows($resultado);
        if($verfilas >=1)
        {

            // session_start();
            // $_SESSION['user'] = $user;
            // $_SESSION['pass'] = $pass;
            // header("Location:./pageHome.php");
            ?>
            <script>
    window.location="./pageHome.php";
    </script> 
   
         
            <?php
        }
        else
        {
            ?>
            <div class="errorLogin">
            <h3>Usuario y/o Contraseña Incorrectos</h3>
            <div>
            <?php
        }
    }
    ?>
    </body>
</html>