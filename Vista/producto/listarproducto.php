<!doctype html>
<?php 
include_once '../../Controlador/controladorproducto.php';
include_once '../../Modelo/conexion.php';
include_once '../../Modelo/producto.php';
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Listar Productos</title>
</head>
<body>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
            <h1 class="text-center text-success">
                    LISTADO DE PRODUCTOS
            </h1>     
            </div>
        
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary"href="formularioCrearProducto.php"> AGREGAR PRODUCTO</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td> Id </td>
                            <td> Nombre </td>
                            <td> Descripcion </td>
                            <td> Cantidad </td>
                            <td> Valor </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $controladorproducto = new controladorproducto();
                            $productos = $controladorproducto->listar();
                                foreach($productos as $producto){
                                    echo "<tr>";
                                    echo "<td>" . $producto->getProId() . "</td>";
                                    echo "<td>" . $producto->getProNombre() . "</td>";
                                    echo "<td>" . $producto->getProDescripcion() . "</td>";
                                    echo "<td>" . $producto->getProCantidad() . "</td>";
                                    echo "<td>" . $producto->getProValor() . "</td>";
                                    echo "</tr>";
                                }
                        ?>
                        
                    </tbody>
                </table>
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