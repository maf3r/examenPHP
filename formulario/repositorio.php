<?php

define("IVA", "0.12");

$nombre = $_POST['Nombre'];
$ruc = $_POST['Ruc'];
$subtotal= $_POST['Cantidad'] * $_POST['Precio'];
$iva= $subtotal * IVA;
$total = $subtotal + $iva;

echo "Nombre " . $_POST['Nombre'] ."</br>";
echo "RUC "  . $_POST['Ruc'] ."</br>";
echo "Cantidad "  . $_POST['Cantidad'] ."</br>";
echo "Precio "  . $_POST['Precio'] ."</br>";
echo "IVA "  . $iva ."</br>";
echo "Total a Pagar " .$total;

?>
