<?php

class Factura
{
    private $id;
    private $descripcion;
    private $total;
    
     function __construct($id, $descripcion, $total) {
       $this->id = $id;
       $this->descripcion = $descripcion;
       $this->total = $total;
     }
    
     function setid($id){
       $this->id = $id;
     } 
     function getid(){
       return $this->id;
     } 
     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
     } 

      function settotal($total){
       $this->total = $total;
     } 
     function gettotal(){
       return $this->total;
}

?> 
