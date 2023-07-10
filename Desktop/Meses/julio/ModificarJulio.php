<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Modificar Productos</title>
</head>
<body>
 
<!--===================================-->
                <!--Navbar-->
  <!--===================================--> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Productos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
       </div>
    </div>
  </div>
</nav>  
<?php    
       include("conexionJulio.php"); 

        
      $id = $_GET["id"]; 


      $sql=  $sql = "SELECT * FROM  julio WHERE id=$id";
      $consulta = mysqli_query($conexion, $sql); 
       
      $fila = mysqli_fetch_assoc($consulta);

?> 

<!--===================================-->
                <!--Ingresar productos-->
  <!--===================================--> 
  <form class="container-fluid col-6 justify-content-center text-center pt-3 " id="formulario" method="POST" action="datosjulioModificados.php">  
  <div class="form-group pt-3">
            <div>
            <input type="text" class="d-none"
                    placeholder="Nombre del recordatorio" id="id" name="id" value="<?php echo $fila["id"]?>">  
            </div> 
            <div>
            <input type="text" class="form-control"
                    placeholder="Nombre del recordatorio" id="nombre" name="nombre" required  value="<?php echo $fila["nombre"]?>"> 
            </div> 
            <div class="form-group pt-3">
                <input type="text" class="form-control" 
                    placeholder="Tarea" name="tarea" id="tarea" required value="<?php echo $fila["tarea"]?>"> 
            </div> 
            <div class="form-group pt-3">
                <input type="text" class="form-control" 
                    placeholder="Hora(Opcional)" name="hora" id="hora" required value="<?php echo $fila["hora"]?>"> 
            </div> 
            <div class="form-group pt-3">
                <input type="date" class="form-control" 
                    placeholder="" name="fecha" required id="fecha" value="<?php echo $fila["fecha"]?>">   
            </div> 
    <button type="submit" class=" btn btn-primary btn-block mt-2">Guardar</button>
    </div>
</form>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>