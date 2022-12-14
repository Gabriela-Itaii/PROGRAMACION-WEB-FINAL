<?php include("header.php"); ?>
<?php include("conexion.php"); ?>

<?php

if(isset($_POST['submitEnviarAlbum'])) {

    $nombres = $_POST['nombresAlumno'];
    $apellidos = $_POST['apellidosAlumno'];
    $correoelectronico = $_POST['correoAlumno'];
    $telefono = $_POST['telefonoAlumno'];
    $trabajoActual = $_POST['trabajoActualAlumno'];
    $trabajoAnterior = $_POST['trabajoAnteriorAlumno'];

    $fecha = new DateTime();

    $imagen = $fecha->getTimestamp()."_".$_FILES['fotoAlumno']['name'];
    $imagen_temporal = $_FILES['fotoAlumno']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    $objConexion = new conexion();
    $sql = "INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `correoelectronico`, `telefono`, `trabajoactual`, `trabajoanterior`, `imagen`) VALUES (NULL, '$nombres', '$apellidos', '$correoelectronico', '$telefono', '$trabajoActual', '$trabajoAnterior', '$imagen');";
    $objConexion->ejecutarPruebaConexion($sql);
    header("location:album.php");

}

$objConexion = new conexion();
$alumnos = $objConexion->consultarPruebaConexion("SELECT * FROM `alumnos`");

?>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="class-header">
                    Datos del Alumn@
                </div>
                <div class="card-body">
                    <form action="album.php" method="post" enctype="multipart/form-data">
                        Nombres: <input class="form-control" id="" type="text" name="nombresAlumno" required>
                        <br/>
                        Apellidos: <input class="form-control "id="" type="text" name="apellidosAlumno" required>
                        <br/>
                        Correo Electronico: <input class="form-control" id="" type="email" name="correoAlumno" required>
                        <br/>
                        Telefono: <input class="form-control" id="" type="text" name="telefonoAlumno" required>
                        <br/>
                        Trabajo Actual: <input class="form-control" id="" type="text" name="trabajoActualAlumno" required>
                        <br/>
                        Trabajo Anterior: <input class="form-control" id="" type="text" name="trabajoAnteriorAlumno" required>
                        <br/>
                        Fotografia: <input class="form-control" id="" type="file" name="fotoAlumno" required>
                        <br/>
                        <input class="btn btn-success" type="submit" value="Enviar Informacion" name="submitEnviarAlbum">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>em@il</th>
                        <th>Telefono</th>
                        <th>Trabajo Actual</th>
                        <th>Trabajo Anterior</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($alumnos as $alumno) { ?>
                    <tr>
                        <td><?php echo $alumno['id']; ?></td>
                        <td><?php echo $alumno['nombres']; ?></td>
                        <td><?php echo $alumno['apellidos']; ?></td>
                        <td><?php echo $alumno['correoelectronico']; ?></td>
                        <td><?php echo $alumno['telefono']; ?></td>
                        <td><?php echo $alumno['trabajoactual']; ?></td>
                        <td><?php echo $alumno['trabajoanterior']; ?></td>
                        <td>
                        <img width="100" src="imagenes/<?php echo $alumno['imagen']; ?>" alt="">
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
