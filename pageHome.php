<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ventas Cuahutemoc</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>

    <?php
       require_once "./db/conexion.php"; 
    ?>
    

<script src="./js/date.js"></script>
    <script>
    DameLaFechaHora();
  </script>
    
    <div class="center">
          <p style="font-family:Brush Script MT;" class="pageHome-1">Alitas BBq y mas...</p>
          <center>
        <div class="div-3">
            <form method="GET" action="pageHome.php"> 
                <br>
                <p style="font-family:Brush Script MT;" class="pageHome">Alitas:   
                    <input type="number" name="alitas" value="0">
                    HotDogs:  
                    <input type="number" name="hotdogs" value="0">
                </p>
                <br>
                <p style="font-family:Brush Script MT;" class="pageHome">Papas:    
                    <input type="number" name="papas" value="0">
                    Platanos:
                    <input type="number" name="platanos" value="0">
                </p>
                <br>
                <p style="font-family:Brush Script MT;" class="pageHome">HotCakes:
                    <input type="number" name="hotcakes" value="0">
                    Micheladas:
                    <input type="number" name="micheladas" value="0">
                </p>
                <br>
                <button type="submit" title="Realizar venta" class="button-3" name="button1">SubTotal</button>
            </p>
            </form>
        </div>
</center>
        <br>
        <a href="./Login/adminPage.php">
        <img src="./img/image1.png" alt="imagen de asador" title="Alitas al carbon" name="button1" class="image1">
        </a>
        
</div>
    <?php

    if(isset($_GET["button1"])==1)
    {


        $alitas= $_GET['alitas'];
        $hotdogs= $_GET['hotdogs'];
        $papas= $_GET['papas'];
        $platanos= $_GET['platanos'];
        $hotcakes= $_GET['hotcakes'];
        $micheladas= $_GET['micheladas'];
        
                    $FechaHora= "<script>
                    DameLaFechaHora();
                  </script>" ;
                  $date = $FechaHora;
                  $fecha = date("Y-m-d");
                
                    $consulta= "SELECT * FROM precios ORDER BY id DESC LIMIT 1";
                    $ejecutarconsulta= mysqli_query($db,$consulta);
                    $verfilas= mysqli_num_rows($ejecutarconsulta);
                    $fila= mysqli_fetch_array($ejecutarconsulta);
        
                    /* aqui realizaremos las multiplicaciones con los precios en la db para saber el total de la venta */
        
                  
            $Total1=$fila[1]*$alitas;
            $Total2=$fila[4]*$hotdogs;
            $Total3=$fila[2]*$papas;
            $Total4=$fila[5]*$platanos;
            $Total5=$fila[3]*$hotcakes;
            $Total6=$fila[6]*$micheladas;

            $TotalVenta= ($Total1+$Total2+$Total3+$Total4+$Total5+$Total6);

        ?>
        <br>
        <div class="container">
        <center>
            <div class="div-3">
            <form method="GET" action="venta.php">
                <br>
            <p>Total  de la Venta <input type="number" value="<?php echo $TotalVenta; ?>" disabled>
            </p>
            <br>
            <p>Pago <input type="number" name="pago" placeholder="El cliente paga con: ">
            </p>
            <br>
                <button type="submit" title="Registrar venta" class="button-3" name="button2">Realizar Venta</button>
            </form>
            </div>
    </center>
            </div>
            <?php
            
date_default_timezone_set('America/Mexico_City');    
$DateAndTime = date('m-d-Y h:i:s a', time());  

$almacenar= "INSERT INTO registro( alitas, papas, hotcakes, hotdogs, platanos, micheladas, total, fecha) VALUES ( '$alitas', '$papas', '$hotcakes', '$hotdogs', '$platanos', '$micheladas', '$TotalVenta', '$DateAndTime')";
$resultado= mysqli_query($db, $almacenar);

    }

    ?>
    </body>
</html>