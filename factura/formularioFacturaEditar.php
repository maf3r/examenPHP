<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Factura</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("FacturaCollector.php");
include_once("Factura.php");
$FacturaCollector = new FacturaCollector();
$ObjUsuario = $FacturaCollector->showFactura($id);
?>
<h2>Editar Objeto Factura </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="id" value="<?php echo $ObjFactura->getIdFactura(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="Factura"  value="<?php echo $ObjDescripcion->getDescripcion(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
