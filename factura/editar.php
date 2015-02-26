<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$id=$_POST["id"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->updateFactura($id,$descripcion);

echo "id :".$id." actualizado a:".$descripcion." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
