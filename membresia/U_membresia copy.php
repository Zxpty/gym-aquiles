<?php
include('../config/dbconnect.php');

$id=$_POST['txt_id'];
$nombre = $_POST['txt_nomb'];
$duracion = $_POST['txt_dura'];
$precio = $_POST['txt_prec'];
$estado = $_POST['txt_est'];
$serv = $_POST['lst_serv'];

$sql="update membresia set nombre_me ='$nombre', 
    duracion_me = $duracion,
    precio_me = $precio,
    estado_me = '$estado',
    id_se = $serv 
    where id_me = $id";

mysqli_query($cn,$sql);

header('location: ../membresia.php');
?>