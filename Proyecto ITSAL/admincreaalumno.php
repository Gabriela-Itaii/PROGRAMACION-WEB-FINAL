<?php include("headeradmin.php"); ?>
<?php include("conexion.php"); ?>

<?php

if(isset($_POST['creaAlumno'])) {
//if($_POST) {
//    print_r($_POST);

    $usuarioAlumno = $_POST['usuarioAlumno'];
    $contrasenaAlumno = $_POST['contrasenaAlumno'];

    $objConexion = new conexion();
    $sql = "INSERT INTO `loginalumno` (`id`, `usuarioalumno`, `contrasenaalumno`) VALUES (NULL, '$usuarioAlumno', '$contrasenaAlumno');";
    $objConexion->ejecutarPruebaConexion($sql);
    header("location:admincreaalumno.php");

//    $objConexion = new conexion();
//    $alumnos = $objConexion->consultarPruebaConexion("SELECT * FROM `alumnos`");
//    print_r()
//    print_r($alumnos);
}

if($_GET) {
    //"DELETE FROM `alumnos` WHERE `alumnos`.`id` = ''";
    $id = $_GET['borrarAlumno'];
    $objConexion = new conexion();
    $sql = "DELETE FROM `loginalumno` WHERE `loginalumno`.`id` =".$id;
    $objConexion->ejecutarPruebaConexion($sql);
    header("location:admincreaalumno.php");

}

$objConexion = new conexion();
$alumnos = $objConexion->consultarPruebaConexion("SELECT * FROM `loginalumno`");

?>

<br/>
<h1 style=" display:flex; jusitfy-content: center">SECCION ADMINISTRADOR</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="class-header">
                    Datos de la cuenta Alumn@ a crear
                </div>
                <div class="card-body">
                    <form action="admincreaalumno.php" method="post">
                        Usuario: <input class="form-control" id="" type="text" name="usuarioAlumno" required>
                        <br/>
                        Contraseña: <input class="form-control "id="" type="password" name="contrasenaAlumno" required >
                        <br/>
                        <input class="btn btn-success" type="submit" value="Crea Alumno" name="creaAlumno">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($alumnos as $alumno) { ?>
                    <tr>
                        <td><?php echo $alumno['id']; ?></td>
                        <td><?php echo $alumno['usuarioalumno']; ?></td>
                        <td><?php echo $alumno['contrasenaalumno']; ?></td>
                        <td><a class="btn btn-danger" href="?borrarAlumno=<?php echo $alumno['id']; ?>">Eliminar Alumno</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
