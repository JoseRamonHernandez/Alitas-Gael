<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ventas Cuahutemoc</title>
        <link rel="stylesheet" href="../css/estilos2.css">
    </head>
    <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <?php
       require_once "../db/conexion.php"; 
    ?>
    <!-- start nav -->
<nav id="menu" >
    <!-- start menu -->
    <ul >
     <li><a href="#">Opciones</a>
    <!-- start menu desplegable -->
     <ul>
    <li><a href="../pageHome.php">Nueva Venta</a></li>
     <li><a href="#">Consultar ventas</a></li>
     <li><a href="#">Usuarios</a></li>
     <li><a href="./preciosPage.php">Precios</a></li>
     <li><a href="../login.php" title="Regresar al Login">Cerrar Sesión</a></li>
     </ul>
    <!-- end menu desplegable -->
     </li>
    </ul>
    <!-- end menu -->
    </nav>
    <!-- end nav -->
    <script src="../js/date.js"></script>
<script>
    DameLaFechaHora();
  </script>
  <?php
      require_once "../db/conexion.php";
?>
  <center>
      <h1>Registros de Ventas</h1>
  </center>
  
<div id="">

<div class="container">
    <center>
<table class="table">
        <thead>
          <tr class="table-active">
              
          <th class="bg-dark text-white">FECHA</th>
          <th class="bg-dark text-white">ALITAS</th>
            <th class="bg-dark text-white">PAPAS</th>
              <th class="bg-dark text-white">HOTCAKES</th>
              <th class="bg-dark text-white">HOTDOGS</th>
              <th class="bg-dark text-white">PLATANOS</th>
              <th class="bg-dark text-white">MICHELADAS</th>
              <th class="bg-dark text-white">TOTAL</th>
              
              
             
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT * FROM registro WHERE id>='3'";
    $ejecutarconsulta= mysqli_query($db,$consulta);
    $verfilas= mysqli_num_rows($ejecutarconsulta);
    $fila= mysqli_fetch_array($ejecutarconsulta);
// echo $verfilas;
    if(!$ejecutarconsulta)
    {
        echo("ERROR en la consulta");
    }
    else
        {
            if($verfilas<1)
            {
                echo("<tr><td>Sin registros</td></tr>");
            }
            else
            {
                for($x=0; $x<=$fila; $x++)
                {   
                    echo' 
                        <tr>
                        <td class="table-warning">'.$fila[8].'</td>
                        <td class="table-warning">'.$fila[1].'</td>
                        <td class="table-warning">'.$fila[2].'</td>
                        <td class="table-warning">'.$fila[3].'</td>
                        <td class="table-warning">'.$fila[4].'</td>
                        <td class="table-warning">'.$fila[5].'</td>
                        <td class="table-warning">'.$fila[6].'</td>
                        <td class="table-warning">$'.$fila[7].'</td>
                        
                              
                        </tr>';
                    
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }

    ?>
        
      
<br>

</table>
</center>

</div>

</div>
</div>
</body>
</html>