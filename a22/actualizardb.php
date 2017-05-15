<?php
include 'dbNBA.php';
$actualizar = new dbnba();
$actualizar->actualizarEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
 ?>
