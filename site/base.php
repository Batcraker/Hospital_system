<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/db.css">
    <title>DATABASE</title>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <nav>
                <ul class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="login.php">Iniciar Session</a></li>
                    <li><a href="register.php">Registrar</a></li>
                    <li><a href="#">Administracion</a></li>
                </ul>
            </nav>
        </div>
        <div class="contain">
            <div class="table">
                <h2>Base de datos</h2>
                <table class="database">
                    <thead>
                        <tr class="cabeza">
                            <th>ID</th>
                            <th>Primer nombre</th>
                            <th>Segundo nombre</th>
                            <th>primer apellido</th>
                            <th>segundo Apellido</th>
                            <th>Fecha de nacimiento</th>
                            <th>Fecha de ingreso</th>
                            <th>ip</th>
                            <th>Enfermedad</th>
                            <th>Tipo de documentos</th>
                            <th>Numero de identidad</th>
                            <th>Sexo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("con_db.php");

                        $query="SELECT * FROM pacientes";
                        $resultado=mysqli_query($conex, $query);

                        while($mostrar=mysqli_fetch_array($resultado)){
                            ?>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['primer_nombre'] ?></td>
                                <td><?php echo $mostrar['segundo_nombre'] ?></td>
                                <td><?php echo $mostrar['primer_apellido'] ?></td>
                                <td><?php echo $mostrar['segundo_apellido'] ?></td>
                                <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
                                <td><?php echo $mostrar['fecha_ingreso'] ?></td>
                                <td><?php echo $mostrar['ip'] ?></td>
                                <td><?php echo $mostrar['enfermedad'] ?></td>
                                <td><?php echo $mostrar['tipo_doc'] ?></td>
                                <td><?php echo $mostrar['nit'] ?></td>
                                <td><?php echo $mostrar['sexo'] ?></td>
                            </tr>
                            
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>