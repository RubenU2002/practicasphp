<?php
    include_once('conexion.php');
    $query= pg_query("select * from estudiantes");
    while($row=pg_fetch_array($query,NULL,PGSQL_ASSOC)){
        echo "Codigo:".$row['cod_est'];
        echo "Nombre: ".$row['nomb_est']."<br/>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="delete.php" method="POST">
        <h1>hola</h1>
        <p>COD:</p>
        <input type="text" name="codEstu">
        <button type="submit">borrar</button>
    </form>
    <form action="insertar.php" method="POST">
        <h3>Inserte su cosas</h3>
        <input type="number" name="cod_Estu">
        <input type="text" name="nomb_est">
        <button type="submit">insertar</button>
    </form>
</body>
</html>