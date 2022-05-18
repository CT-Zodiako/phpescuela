<?php include("header.php");?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo Estudiante
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
                    <form action="Guardar_usuario.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
                            <div class="col-sm-10">
                            <input type="number" name="id" class="form-control"  placeholder="Codigo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">NOMBRE ESTUDIANTE</label>
                            <div class="col-sm-10">
                            <input type="text" name="nombre" class="form-control"  placeholder="Nombre">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">GRUPO</label>
                            <div class="col-sm-10">
                            <input type="text" name="grupo" class="form-control"  placeholder="Grupo">
                            </div>
                        </div>
                  
                       

                            <input type="submit" class="btn btn-success" name="Guardar_usuario" value="Registrar">
                        </div>
                        
           
                    
                </div>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

<?php 
    include("conexion.php");
   

    $sql="SELECT *  FROM estudiantes";
    $query=mysqli_query($conn,$sql);
?>
<div class="container mt-5">
                <table class="table table-hover" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre Estudiante</th>
                                        <th>Grupo</th>                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['grupo']?></th>
                                                 
                                                <th>
                                                <a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Nota</a>  
                                                <a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">Editar</a>
                                              <a href="EliminarEstudiante.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                                              </th>
                                                                               
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table> 

</div>



<?php include("fooder.php");?>