<?php
include_once 'controlador/CPrincipal.php';
echo "prueba de sincronizacion lalal";
$cp = new CPrincipal();
?>
<? if($cp->showLayout) include $cp->getLayout(); ?>
