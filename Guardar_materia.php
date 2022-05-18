<?php 
include('conexion.php');
if(isset($_POST['Guardar_materia']))
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

 

    $consulta = "INSERT INTO materias (id,nombre) values('$id','$nombre')";
    $result = mysqli_query($conn, $consulta);

    if(!$result)
    {


        die("ERROR EN EL QUERY");

    }
    else {
        header('Location: GestionMateria.php ');
    }
}




?>