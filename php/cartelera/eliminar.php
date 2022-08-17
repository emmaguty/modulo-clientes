<?php

include '../conexion.php';

    header("Content-type: application/json; charset=utf-8");
    $id = json_decode(file_get_contents("php://input"), true);
    error_reporting(0);

    if (!empty($id)){

        $id = $id['id'];

        $consulta_delete = mysqli_query($conn, "SELECT * FROM cartelera WHERE id_cartelera = $id ");
        $result = mysqli_fetch_array($consulta_delete);
        $delete = mysqli_query($conn, "DELETE FROM cartelera WHERE id_cartelera = $id ");
        if ($delete) {
            if(file_exists("../../public/img/cartelera/".$result['imagen'])){
                unlink("../../public/img/cartelera/".$result['imagen']);
            }
            echo json_encode("correcto");
        }else{
            echo json_encode("error");
        }
    }else {
        echo json_encode('vacio');
    }

?>