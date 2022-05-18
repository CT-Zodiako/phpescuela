<?php
include("conexion.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM estudiantes where id =$id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    else{
        header('Location: GestionEstudiante.php');
    }
}



?>