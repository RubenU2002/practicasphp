<?php 
    include_once("conexion.php");
    $cod= $_POST['cod_Estu'];
    $nomb = $_POST['nomb_est'];

    pg_query("INSERT INTO estudiantes values('$cod','$nomb')");
    header("location:index.php");
?>