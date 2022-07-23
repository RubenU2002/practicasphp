<?php 
    include_once('conexion.php');
    $cod = $_POST['codEstu'];
    
    pg_query("DELETE FROM estudiantes WHERE cod_est='$cod'");
    header("location:index.php");
?>