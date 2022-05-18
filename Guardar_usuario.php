<?php 
include('conexion.php');
if(isset($_POST['Guardar_usuario']))
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $grupo = $_POST['grupo'];
 

    $consulta = "INSERT INTO estudiantes(id,nombre,grupo) values('$id','$nombre','$grupo')";
    $result = mysqli_query($conn, $consulta);

    if(!$result)
    {


        die("ERROR EN EL QUERY");

    }
    else {
        header('Location: GestionEstudiante.php ');
    }
}




?>