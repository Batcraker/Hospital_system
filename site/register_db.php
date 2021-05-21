<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if ($conex) {
        if (strlen($_POST['primer-nombre']) >= 1 && strlen($_POST['segundo-nombre']) >= 1 && strlen($_POST['primer-apellido']) >= 1 && strlen($_POST['segundo-apellido']) >= 1 && strlen($_POST['fecha-nacimiento']) >= 1 && strlen($_POST['fecha-ingreso']) >= 1 && strlen($_POST['enfermedad']) >= 1 && strlen($_POST['numero_dni']) >= 1) {
            if (isset($_POST['dni']) && isset($_POST['sexo'])) {
                $prim_nomb =trim($_POST['primer-nombre']);
                $seg_nomb = trim($_POST['segundo-nombre']);
                $prim_apell = trim($_POST['primer-apellido']);
                $seg_apell = trim($_POST['segundo-apellido']);
                $fecha_nac = $_POST['fecha-nacimiento'];
                $fecha_ing = $_POST['fecha-ingreso'];
                $ip = getenv("REMOTE_ADDR");
                $enfermedad = trim($_POST['enfermedad']);
                $dni_type = $_POST['dni'];
                $dni_number = trim($_POST['numero_dni']);
                $sexo = $_POST['sexo'];

                $insert= "INSERT INTO pacientes (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, fecha_ingreso, ip, enfermedad, tipo_doc, nit, sexo) VALUES ('$prim_nomb', '$seg_nomb', '$prim_apell', '$seg_apell', '$fecha_nac', '$fecha_ing', '$ip', '$enfermedad', '$dni_type', '$dni_number', '$sexo')";
                $res = mysqli_query($conex, $insert);
                if ($res) {
                    ?>
                    <h3 class="god">¡Datos registrados satisfactoriamente!</h3>
                    <?php
                } else {
                    ?>
                    <h3 class="bad">¡Ups Error inseperado!</h3>
                    <?php
                }
                
            } else {
                ?>
                <h3 class="bad">Selecciona todos los datos, por favor</h3>
                <?php
            }
            
        } else {
            ?>
            <h3 class="bad">Por favor llena todos los campos</h3>
            <?php
        }
        
    } else {
        ?>
        <h3 class="bad">Error inseperado</h3>
        <?php
    }
    
}


?>