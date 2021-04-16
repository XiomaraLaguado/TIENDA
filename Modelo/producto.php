<?php

class producto{
    private $pro_id;
    private $pro_nombre;
    private $pro_descripcion;
    private $pro_cantidad;
    private $pro_valor; 
    
    function __construct($pro_id,$pro_nombre,$pro_descripcion,$pro_cantidad,$pro_valor){
        $this->pro_id=$pro_id;
        $this->pro_nombre=$pro_nombre;
        $this->pro_descripcion=$pro_descripcion;
        $this->pro_cantidad=$pro_cantidad;
        $this->pro_valor=$pro_valor;
    }

    function setProId($pro_id){
        $this->pro_id = $pro_id;
    }

    function setProNombre($pro_nombre){
        $this->pro_nombre = $pro_nombre;
    }

    function setProDescripcion($pro_descripcion){
        $this->pro_descripcion = $pro_descripcion;
    }

    function setProCantidad($pro_cantidad){
        $this->pro_cantidad = $pro_cantidad;
    }

    function setProValor($pro_valor){
        $this->pro_valor = $pro_valor;
    }

    function getProId(){
        return $this->pro_id;
    }

    function getProNombre(){
        return $this->pro_nombre;
    }

    function getProDescripcion(){
        return $this->pro_descripcion;
    }

    function getProCantidad(){
        return $this->pro_cantidad;
    }

    function getProValor(){
        return $this->pro_valor;
    }
}