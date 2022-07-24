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
        <select name="select1" id="select1" >
            <?php 
            $resultado=pg_query("select * from estudiantes");
            while($row1=pg_fetch_object($resultado)){
            ?>
                <option> <?php  echo $row1->cod_est; ?></option>
            <?php
            }
             ?>
        </select>
        <button type="submit">borrar</button>
        <select name="" id="">
            <option value="">2022</option>
            <option value="">2023</option>
            <option value="">2020</option>
        </select>

    </form>
    <form action="insertar.php" method="POST">
        <h3>Inserte su cosas</h3>
        <input type="number" name="cod_Estu">
        <input type="text" name="nomb_est">
        
        <select name="select" id="11" >
            <?php 
            $resultado=pg_query("select * from estudiantes");
            while($row1=pg_fetch_object($resultado)){
            ?>
                <option value="$contador"> <?php  echo $row1->cod_est; ?></option>
            <?php
            }
             ?>
        </select>
        <button type="submit">insertarpirchurria</button>
    </form>
</body>
</html>