<?php
    include '../conexion.php';

    $sel=$conex->query("SELECT * FROM clientes" );

    while ($row = $sel->fetch_assoc()) {
        echo $row['nombre']."<br>";
    }
?>