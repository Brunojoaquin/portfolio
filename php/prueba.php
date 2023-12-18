<?php

ini_get('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAuto = array();
$aAuto ["color"] = array ("Negro","Verde");
$aAuto ["Marca"] = "Ford";
$aAuto ["anio"] = "1908";
$aAuto ["Precio"] = "800";

echo $aAuto ["Color"] = [0];
print_r($aAuto);

?>