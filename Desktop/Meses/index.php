<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6784074dee.js" crossorigin="anonymous"></script>
    <title>Calendario</title>
</head>
<body> 

 <!--=============================================-->
                   <!--Navbar--> 
    <!--=============================================-->
    


    <!--============================-->
        <!------------Nabvar--------------->
        <!--===============================--> 
        <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h1 class="text-light">Recordatorios</h1> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Ingresar Recordatorio
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"  href="julio/JulioIngresar.php#">Julio</a></li>  
                                <li><a class="dropdown-item" href="agosto/IngresarAgosto.php#">Agosto</a></li>
                                <li><a class="dropdown-item" href="septiembre/IngresarSeptiembre.php#">Septiembre</a></li> 
                                <li><a class="dropdown-item" href="octubre/IngresarOctubre.php#">Octubre</a></li>
                                <li><a class="dropdown-item" href="noviembre/IngresarNoviembre.php#">Noviembre</a></li>
                                <li><a class="dropdown-item" href="diciembre/IngresarDiciembre.php#">Diciembre</a></li> 
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav> 


    <!--===================================-->
                <!--tabla:julio-->
  <!--===================================--> 
  <div class="text-center bg-warning">
    <h3>Julio</h3>
  </div>
  <div class="container mt-5 ">
    <table class="table table-light text-dark">
        <thead> 
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Nombre</th>
                <th scope="col">Tarea</th>
                <th scope="col">Hora</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th> 
             </tr>
        </thead>
        <tbody>
            
   <?php   
             include("conexionBD/conexionMeses.php"); 
    
   
            $sql = "SELECT * FROM  julio";  
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
            
            while($fila = mysqli_fetch_assoc($consulta)) {
            echo "
            <tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"]."</td>
            <td>" . $fila["tarea"]."</td>
            <td>" . $fila["hora"]."</td>
            <td>" . $fila["fecha"]. "</td>
            <td><a href=\"julio/ModificarJulio.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-pen-to-square fa-beat\"></i></a> 
            <a href=\"julio/EliminarJulio.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-trash fa-shake\"></i></a> </td> 
           </tr>";
           
           }
        }
           
            mysqli_close($conexion);
      
      ?> 
      
        </tbody>
    </table>
</div>  

 <!--===================================-->
                <!--tabla:agosto-->
  <!--===================================--> 
  <div class="text-center bg-secondary">
    <h3>Agosto</h3>
  </div>
  <div class="container mt-5 ">
    <table class="table table-light text-dark">
        <thead> 
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Nombre</th>
                <th scope="col">Tarea</th>
                <th scope="col">Hora</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th> 
             </tr>
        </thead>
        <tbody>
            
   <?php   
              include("conexionBD/conexionMeses.php");   
    
   
            $sql = "SELECT * FROM  agosto"; 
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
            
            while($fila = mysqli_fetch_assoc($consulta)) {
            echo "
            <tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"]."</td>
            <td>" . $fila["tarea"]."</td>
            <td>" . $fila["hora"]."</td>
            <td>" . $fila["fecha"]. "</td>
            <td><a href=\"agosto/ModificarAgosto.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-pen-to-square fa-beat\"></i></a> 
            <a href=\"agosto/EliminarAgosto.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-trash fa-shake\"></i></a> </td>
           </tr>";
           
           }
        }
           
            mysqli_close($conexion);
      
      ?> 
      
        </tbody>
    </table>
</div> 

 <!--===================================-->
                <!--tabla:septiembre-->
  <!--===================================--> 
  <div class="text-center bg-success">
    <h3>Septiembre</h3>
  </div>
  <div class="container mt-5 ">
    <table class="table table-light text-dark">
        <thead> 
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Nombre</th>
                <th scope="col">Tarea</th>
                <th scope="col">Hora</th>
                <th scope="col">Fecha</th> 
                <th scope="col">Acciones</th> 
             </tr>
        </thead>
        <tbody>
            
   <?php   
              include("conexionBD/conexionMeses.php");  
    
   
            $sql = "SELECT * FROM  septiembre";  
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
            
            while($fila = mysqli_fetch_assoc($consulta)) {
            echo "
            <tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"]."</td>
            <td>" . $fila["tarea"]."</td>
            <td>" . $fila["hora"]."</td> 
            <td>" . $fila["fecha"]. "</td>
            <td><a href=\"septiembre/ModificarSeptiembre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-pen-to-square fa-beat\"></i></a> 
            <a href=\"septiembre/EliminarSeptiembre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-trash fa-shake\"></i></a> </td>
           </tr>";
           
           }
        }
           
            mysqli_close($conexion);
      
      ?> 
      
        </tbody>
    </table>
</div>
 
 <!--===================================-->
                <!--tabla:octubre-->
  <!--===================================--> 
  <div class="text-center bg-danger">
    <h3>Octubre</h3>
  </div>
  <div class="container mt-5 ">
    <table class="table table-light text-dark">
        <thead> 
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Nombre</th>
                <th scope="col">Tarea</th>
                <th scope="col">Hora</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th> 
             </tr>
        </thead>
        <tbody>
            
   <?php   
             include("conexionBD/conexionMeses.php"); 
    
   
            $sql = "SELECT * FROM  octubre ";  
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
            
            while($fila = mysqli_fetch_assoc($consulta)) {
            echo "
            <tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"]."</td>
            <td>" . $fila["tarea"]."</td>
            <td>" . $fila["hora"]."</td> 
            <td>" . $fila["fecha"]. "</td>
            <td><a href=\"octubre/ModificarOctubre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-pen-to-square fa-beat\"></i></a> 
            <a href=\"octubre/EliminarOctubre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-trash fa-shake\"></i></a> </td>
           </tr>";
           
           }
        }
           
            mysqli_close($conexion);
      
      ?> 
      
        </tbody>
    </table>
</div>
 

 <!--===================================-->
                <!--tabla:noviembre-->
  <!--===================================-->
  <div class="text-center bg-info">
    <h3>Noviembre</h3>
  </div> 
  <div class="container mt-5 ">
    <table class="table table-light text-dark">
        <thead> 
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Nombre</th>
                <th scope="col">Tarea</th>
                <th scope="col">Hora</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th> 
             </tr>
        </thead>
        <tbody>
            
   <?php   
            include("conexionBD/conexionMeses.php"); 
    
   
            $sql = "SELECT * FROM  noviembre";  
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
            
            while($fila = mysqli_fetch_assoc($consulta)) {
            echo "
            <tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"]."</td>
            <td>" . $fila["tarea"]."</td>
            <td>" . $fila["hora"]."</td> 
            <td>" . $fila["fecha"]. "</td>
            <td><a href=\"noviembre/ModificarNoviembre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-pen-to-square fa-beat\"></i></a> 
            <a href=\"noviembre/EliminarNoviembre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-trash fa-shake\"></i></a> </td>
           </tr>";
           
           }
        }
           
            mysqli_close($conexion);
      
      ?> 
      
        </tbody>
    </table>
</div> 

 <!--===================================-->
                <!--tabla:diciembre-->
  <!--===================================--> 
  <div class="text-center bg-dark text-light">
    <h3>Diciembre</h3> 
  </div>
  <div class="container mt-5 ">
    <table class="table table-light text-dark">
        <thead> 
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Nombre</th>
                <th scope="col">Tarea</th>
                <th scope="col">Hora</th>
                <th scope="col">Fecha</th>  
                <th scope="col">Acciones</th> 
             </tr>
        </thead>
        <tbody>
            
   <?php   
              include("conexionBD/conexionMeses.php"); 
    
   
            $sql = "SELECT * FROM  diciembre";   
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
            
            while($fila = mysqli_fetch_assoc($consulta)) {
            echo "
            <tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"]."</td>
            <td>" . $fila["tarea"]."</td>
            <td>" . $fila["hora"]. "</td>
            <td>" . $fila["fecha"]. "</td>
            <td><a href=\"diciembre/ModificarDiciembre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-pen-to-square fa-beat\"></i></a> 
            <a href=\"diciembre/EliminarDiciembre.php?id=" . $fila["id"] . "\"><i class=\"fa-solid fa-trash fa-shake\"></i></a> </td> 
           </tr>";
           
           }
        }
           
            mysqli_close($conexion);
      
      ?> 
      
        </tbody>
    </table>
</div>








  
    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>