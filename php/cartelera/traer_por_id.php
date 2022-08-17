<?php
	include '../conexion.php';

    header("Content-type: application/json; charset=utf-8");
    $id = json_decode(file_get_contents("php://input"), true);
    // error_reporting(0);

    if (!empty($id)) {
        $id = $id['id'];
        
        $sql = "SELECT * FROM cartelera WHERE id_cartelera = '$id'";
        $res = mysqli_query($conn, $sql);
    
        echo json_encode(mysqli_fetch_assoc($res));
    }
?>