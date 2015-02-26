<?php

include_once('Factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM Factura where id= ? ", array("{$id}")); 
    $objFactura = new Factura($row[0]{'id'},$row[0]{'descripcion'});
    return $objFactura	;
  }

  function createFactura($descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clase.Factura (id, descripcion) VALUES (?, ?)", array(null, "{$descripcion}"));
  }  

  function readFactura() {
    $rows = self::$db->getRows("SELECT * FROM Factura");        
    $arrayFactura= array();        
    foreach ($rows as $c){
      $aux = new Factura($c{'id'},$c{'descripcion'});
      array_push($arrayFactura, $aux);
    }
    return $arrayFactura;        
  }
  
  function updateFactura($id,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE clase.Factura SET Factura.descripcion = ?  WHERE Factura.id = ? ", array( "{$descripcion}",$id));
  }  

  function deleteFactura($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clase.Factura WHERE id= ?", array("{$id}"));
  }  



}
?>

