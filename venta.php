<!DOCTYPE html>
<html lang="es">
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Venta</title>
        <link rel="stylesheet" href="css/estilos2.css">
</head>
        <body>
            <?php
            require_once "./db/conexion.php";

$pago= $_GET['pago'];
// echo ("El cliente pagó con: ".$pago.  " de un total de: "); Imprime el dinero con el que el cliente pagó


$consulta= "SELECT total FROM registro ORDER BY id DESC LIMIT 1";
$ejecutarconsulta= mysqli_query($db,$consulta);
$verfilas= mysqli_num_rows($ejecutarconsulta);
$fila= mysqli_fetch_array($ejecutarconsulta);

// echo $fila[0]; Imprime el valor total de la compra 

$TotalVenta= $pago - $fila[0];
// date_default_timezone_set('America/Mexico_City');    
// $DateAndTime = date('m-d-Y h:i:s a', time());  
// echo $DateAndTime;
?>

<div class="div-1">

<div>
<div>
  <center>
    <form method="GET" action="pageHome.php">
    <font size= 3><p> Cambio: <input type="number" name="cambio" value="<?php echo $TotalVenta; ?>" disabled> </p></font>
    <br>
    <a href="./pageHome.php">
                <button type="submit" title="Registrar venta" class="button-3" name="button">Realizar Otra Venta</button>
</a>
</form>
</center>
</div>
</div> 
</div>
</body>
</html>