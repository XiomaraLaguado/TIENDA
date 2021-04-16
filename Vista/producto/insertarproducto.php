<!doctype html>
<?php  
    include_once '../../Modelo/producto.php';
    include_once '../../Modelo/conexion.php';
    include_once '../../Controlador/controladorproducto.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Productos Nuevos</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php  
                try{
                    if(!isset($_REQUEST ["id"])){
                    throw new PODException("Por favor digite el id");
                    }
                    if(!isset($_REQUEST ["nombre"])){
                    throw new PDOException("Por favor digite el nombre");
                    }
                    if(!isset($_REQUEST ["descripcion"])){
                    throw new PDOException("Por favor digite la descripcion");
                    }
                    if(!isset($_REQUEST ["cantidad"])){
                    throw new PDOException("Por favor digite la cantidad");
                    }
                    if(!isset($_REQUEST ["valor"])){
                    throw new PDOException("Por favor digite el valor");
                    }

                    $pro_id = $_REQUEST["id"];
                    $pro_nombre = $_REQUEST["nombre"];
                    $pro_descripcion = $_REQUEST["descripcion"];
                    $pro_cantidad = $_REQUEST["cantidad"];
                    $pro_valor = $_REQUEST["valor"];

                //$producto = new producto();
                //$producto->setProId($pro_id);
                //$producto->setProNombre($pro_nombre);
                //$producto->setProDescripcion($pro_descripcion);
                //$producto->setProCantidad($pro_cantidad);
                //$producto->setProValor($pro_valor);

                    $producto = new producto(
                        $pro_id,
                        $pro_nombre,
                        $pro_descripcion,
                        $pro_cantidad,
                        $pro_valor 
                    );

                    $controladorproducto = new controladorproducto();
                    $resultado= $controladorproducto->crear($producto);
                    if($resultado["type"]== "success"){
                    echo '<h2 class="text-center text-success">'.$resultado["mensaje"] ."</h2>";
                    }else{
                    echo '<h2 class="text-center text-danger">'.$resultado["mensaje"] ."</h2>";
                    }
                }       
                    catch(PDOException $ex){
                    echo '<h2 class="text-center text-danger">'.$ex->getMessage() ."</h2>";
                    }
                ?>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <a class="btn btn-warning" href="listarproducto.php"> REGRESAR AL LISTADO </a>
                </div>
            </div>
        </div>
    </div>    
        
        
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>