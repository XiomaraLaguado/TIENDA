<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CREAR PRODUCTOS</title>
</head>
<body>
    <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-md-1">
                    <h1 class="text-center text-success">
                        AGREGAR PRODUCTOS
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-body">
                            <form action="insertarproducto.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="id">Id del Producto</label>
                                        <input name="id"type="number"class="form-control"id="id">
                                    </div>
                                </div>    
                                <div class="form-row">
                                <div class="form-group col-md-12">
                                        <label for="nombre">Nombre del Producto</label>
                                        <input name="nombre"type="text"class="form-control"id="nombre">
                                    </div>
                                </div>
                                <div class="form-row">     
                                    <div class="form-group col-md-12">
                                        <label for="descripcion">Descripcion del Producto</label>                                            <input name="descripcion"type="text"class="form-control"id="descripcion">
                                    </div>
                                </div>
                                <div class="form-row">    
                                    <div class="form-group col-md-12">
                                        <label for="cantidad">Cantidad del Producto</label>
                                        <input name="cantidad"type="number"class="form-control"id="cantidad">
                                    </div>
                                </div>
                                <div class="form-row">    
                                    <div class="form-group col-md-12">
                                        <label for="valor">Valor del Producto</label>
                                        <input name="valor"type="number"class="form-control"id="valor">
                                    </div>
                                </div>
                                <div class="form-row">    
                                    <div class="form-group col-md-12">
                                        <button type="submit"class ="btn btn-primary">ENVIAR</button>                                   </div>
                                </div>    
                            </form>
                        </div>
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