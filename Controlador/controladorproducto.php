<?php
/*include_once '../modelo/conexion.php';
include_once '../modelo/producto.php';*/

class controladorproducto{
    private $conexion;

    function __construct(){
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    /* LISTAR LOS DATOS DE PRODUCTOS (READ) */ 
    function listar(){
        try{
            $sql="select * from producto";
            $ps=$this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);
            $resultado = [];
            while($row=$ps->fetch(PDO::FETCH_OBJ)){
                $producto = new producto(
                    $row->pro_id,
                    $row->pro_nombre,
                    $row->pro_descripcion,
                    $row->pro_cantidad,
                    $row->pro_valor

                );
                //$producto ->setProId($row->pro_id);
                //$producto ->setProNombre($row->pro_nombre);
                //$producto ->setProDescripcion($row->pro_descripcion);
                //$producto ->setProCantidad($row->pro_cantidad);
                //$producto ->setProValor($row->pro_valor);
                array_push($resultado,$producto);
            }
            $this->conexion =null;
        }catch(PDOException $e){
            echo "Fallo la conexion" . $e->getMessage();
        }
        return $resultado;
    }

    function crear($producto){
        try{
            $resultado=[];
            $sql = "insert into producto values (?,?,?,?,?)";
            $ps= $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $producto->getProId(),
                $producto->getProNombre(),
                $producto->getProDescripcion(),
                $producto->getProCantidad(),
                $producto->getProValor()
            ));
            if($ps->rowCount() > 0){
                $mensaje= "SE AGREGO EL PRODUCTO CORRECTAMENTE";
                $type="success";
            }else{
                $mensaje = "NO SE PUDO AGREGAR EL PRODUCTO";
                $type="error";
            }
            $this->conexion = null;

        }   catch(PDOException $e){
            $mensaje ="Error al ingresar el producto" . $e->getMessage();
            $type="error";
            }
            $resultado=[
            "mensaje"=> $mensaje,
            "type"=> $type
            ];
            return $resultado;
    }
}