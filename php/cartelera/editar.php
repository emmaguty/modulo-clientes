<?php

include '../conexion.php';

    // error_reporting(0);
    if (!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['generoPeliculaEditar'])){

        $id = $_POST['id'];
        $genero = $_POST['generoPeliculaEditar'];
        $nombre = $_POST['nombre'];
        $sinopsis = $_POST['descripcion'];
        $horario = $_POST['horarioPelicula'];
        $idioma = $_POST['idioma'];
        $duracion = $_POST['duracionPelicula'];
        $formato = $_POST['formato'];

        $_FILES['img']['name'] = $id.".jpg";
        $imagen=$_FILES['img']['name'];

        $ruta=$_FILES['img']['tmp_name'];
        $destino="../../public/img/cartelera/".$imagen;
        copy($ruta,$destino);

        $update = mysqli_query($conn, "UPDATE cartelera SET imagen = '$imagen', nombre = '$nombre', descripcion = '$sinopsis', genero = '$genero', horario = '$horario', idioma = '$idioma', duracion = '$duracion', formato = '$formato' WHERE id_cartelera = '$id' ");

        if ($update) {
            echo json_encode("correcto");
        }else{
            echo json_encode("error");
        }
    }else{
        echo json_encode('vacio');
    }

?>