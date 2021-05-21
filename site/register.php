<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
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
        <div class="cuerpo">
            <div class="form">
                <h1>Registrar pacientes</h1>
                <form method="post">
                    <div class="info-header">
                        <fieldset class="names">
                            <legend>Nombres y apellidos</legend>
                            <div class="one">
                                <span>Primer Nombre </span><input type="text" name="primer-nombre" id="primer-nombre" placeholder="Primer nombre" autocomplete="off">
                                <span>Segundo Nombre </span><input type="text" name="segundo-nombre" id="segundo-nombre" placeholder="Segundo nombre" autocomplete="off">
                            </div>
                            <div class="two">
                                <span>Primer apellido </span><input type="text" name="primer-apellido" id="primer-apellido" placeholder="Primer apellido" autocomplete="off">
                                <span>Segundo apellido </span><input type="text" name="segundo-apellido" id="segundo-apellido" placeholder="Segundo apellido" autocomplete="off">
                            </div>
                        </fieldset>
                        <fieldset class="other-data">
                            <legend>Otros datos</legend>
                            <div class="one">
                                <span>Fecha de nacimiento </span><input type="date" name="fecha-nacimiento" id="fecha-nacimiento">
                                <span>Fecha de ingreso </span><input type="date" name="fecha-ingreso" id="fecha-ingreso">
                            </div>
                            <div class="two">
                                <span class="ENFERMEDAD">
                                    <span>Enfermedad </span><input type="text" name="enfermedad" id="enfermedad" placeholder="enfermedad" autocomplete="off">
                                </span>
                                <div class="radios">
                                    <span>Tipo de documento de identidad </span>
                                    <input type="radio" name="dni" id="ti" value="TI"><label for="ti">T.I</label>
									<input type="radio" name="dni" id="cc" value="CC"><label for="cc">C.C</label>
									<input type="radio" name="dni" id="pasport" value="Pasaporte"><label for="pasport">Pasaporte</label>
                                    
                                </div>
                                <div class="DNI">
                                        <span class="DNI">Numero </span><input type="text" name="numero_dni" id="number_dni" placeholder="Numero de identidad" autocomplete="off">
                                </div>
                                <div class="sex">
                                    <span>Sexo </span>
                                    <input type="radio" name="sexo" id="m" value="Masculino"><label for="m">Masculino</label>
                                    <input type="radio" name="sexo" id="f" value="Femenino"><label for="f">Femenino</label>
                                    <input type="radio" name="sexo" id="a" value="Alien"><label for="a">Alien</label>
                                </div>

                            </div>
                        </fieldset>
                        <button type="submit" name="register" id="btn_register">Registrar</button>
                        <button id="data-base"><a href="base.php">Base de datos</a></button>
                    </div>
                    <?php include('register_db.php'); ?>
                </form>

            </div>
        </div>
    </div>

</body>

</html>